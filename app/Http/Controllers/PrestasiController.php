<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrestasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Prestasi::latest()->get();
        return view('admin.prestasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'lampiran' => 'max:500000',

        ]);
        $file = $request->file('lampiran');
        if ($file != null) {
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('lampiran', $nama_file);
            Prestasi::create([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'lampiran' => $nama_file
            ]);
        } else {
            Prestasi::create([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan
            ]);
        }
        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        return redirect()->route('landing.detailPrestasi',$prestasi->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'lampiran' => 'max:500000',
        ]);

        $file = $request->file('lampiran');
        if ($file != null) {
            File::delete('lampiran/' . $prestasi->img);
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('lampiran', $nama_file);
            $prestasi->lampiran = $nama_file;
        }
        $prestasi->nama = $request->nama;
        $prestasi->keterangan = $request->keterangan;
        $prestasi->save();
        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        File::delete('lampiran/' . $prestasi->lampiran);
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
