<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Data untuk statistik dasar
        $totalSiswa = Siswa::count();
        $siswaBaru = Siswa::whereMonth('created_at', now()->month)->count();
        $siswaBulanLalu = Siswa::whereMonth('created_at', now()->subMonth()->month)->count();
        $persentasePertumbuhan = $siswaBulanLalu > 0
            ? (($totalSiswa - $siswaBulanLalu) / $siswaBulanLalu) * 100
            : 100;

        // Statistik per kelas
        $kelasStats = Siswa::select('kelas', DB::raw('count(*) as total'))
            ->groupBy('kelas')
            ->get();

        $totalKelas = $kelasStats->count();
        $rataRataPerKelas = $totalKelas > 0 ? $totalSiswa / $totalKelas : 0;

        // Kelas dengan siswa terbanyak
        $kelasTerbanyakData = $kelasStats->sortByDesc('total')->first();
        $kelasTerbanyak = $kelasTerbanyakData ? $kelasTerbanyakData->kelas : '-';
        $jumlahSiswaKelasTerbanyak = $kelasTerbanyakData ? $kelasTerbanyakData->total : 0;

        $persentaseSiswaBaru = $totalSiswa > 0 ? ($siswaBaru / $totalSiswa) * 100 : 0;

        $siswas = Siswa::when($query, function ($q) use ($query) {
            return $q->where('nama', 'like', "%$query%")
                ->orWhere('nis', 'like', "%$query%");
        })->paginate(10);

        return view('siswas.index', compact(
            'siswas',
            'query',
            'totalSiswa',
            'siswaBaru',
            'persentasePertumbuhan',
            'totalKelas',
            'rataRataPerKelas',
            'kelasTerbanyak',
            'jumlahSiswaKelasTerbanyak',
            'persentaseSiswaBaru'
        ));
    }

    // Form tambah
    public function create()
    {
        return view('siswas.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|unique:siswas|max:20',
            'kelas' => 'required|string|max:50',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|max:2048', // Max 2MB
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('siswa-photos', 'public');
            $validated['foto'] = $fotoPath;
        }

        Siswa::create($validated);
        return redirect()->route('siswas.index')->with('success', 'Data berhasil disimpan.');
    }

    // Form edit
    public function edit(Siswa $siswa)
    {
        return view('siswas.edit', compact('siswa'));
    }

    // Update data
    public function update(Request $request, Siswa $siswa)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|unique:siswas,nis,' . $siswa->id . '|max:20',
            'kelas' => 'required|string|max:50',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|max:2048', // Max 2MB
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete old photo if exists
            if ($siswa->foto && Storage::disk('public')->exists($siswa->foto)) {
                Storage::disk('public')->delete($siswa->foto);
            }
            
            $fotoPath = $request->file('foto')->store('siswa-photos', 'public');
            $validated['foto'] = $fotoPath;
        }

        $siswa->update($validated);
        return redirect()->route('siswas.index')->with('success', 'Data berhasil diupdate.');
    }

    // Hapus data
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswas.index')->with('success', 'Data berhasil dihapus.');
    }

    public function show(Siswa $siswa)
    {
        return view('siswas.show', compact('siswa'));
    }
}
