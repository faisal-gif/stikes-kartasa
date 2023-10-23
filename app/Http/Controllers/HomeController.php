<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\News;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $news=News::latest()->limit('3')->get();
        $dosen=Dosen::latest()->limit('4')->get();
        return view('welcome',compact('news','dosen'));
    }
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function farmasi()
    {
        return view('landing.farmasi');
    }
    public function tlm()
    {
        return view('landing.tlm');
    }
    public function kebidanan()
    {
        return view('landing.kebidanan');
    }
    public function kalender_akademik()
    {
        return view('kalender_akademik');
    }
    public function jadwal()
    {
        return view('jadwal');
    }
    public function berita($id)
    {
        $data=News::find($id);
        return view('landing.detailBerita',compact('data'));
    }
    public function dosen()
    {
        $data=Dosen::latest()->get();
        return view('dosen',compact('data'));
    }
    public function prestasi()
    {
        $data=Dosen::latest()->get();
        return view('prestasi',compact('data'));
    }
    public function detailPrestasi($id)
    {
        $data=Prestasi::find($id);
        return view('landing.detailPrestasi',compact('data'));
    }
    public function visMisi()
    {
       
        return view('landing.visiMisi');
    }
}
