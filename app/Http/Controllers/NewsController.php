<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = News::latest()->get();
        return view('admin.berita.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cover' => 'max:500000',
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $file = $request->file('cover');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move('image', $nama_file);
        News::create([
            'cover' => $nama_file,
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect()->route('news.index')->with('success', 'Berita Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return redirect()->route('landing.berita',$news->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.berita.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'img' => 'max:500000',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $file = $request->file('img');
        if ($file != null) {
            File::delete('image/' . $news->img);
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('image', $nama_file);
            $news->cover = $nama_file;
        }
        $news->judul = $request->judul;
        $news->isi = $request->isi;
        $news->save();
        return redirect()->route('news.index')->with('success', 'Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {

        File::delete('image/' . $news->img);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita Berhasil Dihapus');
    }
}
