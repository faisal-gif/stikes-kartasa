<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DosenController extends Controller
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
        $data = Dosen::latest()->get();
        return view('admin.dosen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'img' => 'max:500000',
            'nama' => 'required',
            'nip' => 'required',
        ]);
        $file = $request->file('img');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move('image_dosen', $nama_file);
        Dosen::create([
            'img' => $nama_file,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pendidikan' => $request->pendidikan,
            'jurusan' => $request->jurusan,
            'linkedln' => $request->linkedln,
            'facebook' => $request->facebook,
            'twiter' => $request->twiter,

        ]);
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('admin.dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'img' => 'max:500000',
            'nama' => 'required',
            'nip' => 'required',
        ]);

        $file = $request->file('img');
        if ($file != null) {
            File::delete('image_dosen/' . $dosen->img);
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('image_dosen', $nama_file);
            $dosen->img = $nama_file;
        }
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->pendidikan = $request->pendidikan;
        $dosen->jurusan = $request->jurusan;
        $dosen->linkedln = $request->linkedln;
        $dosen->facebook = $request->facebook;
        $dosen->twiter = $request->twiter;
        $dosen->save();
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        File::delete('image_dosen/' . $dosen->img);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data Berhasil Dihapus');
    }
}
