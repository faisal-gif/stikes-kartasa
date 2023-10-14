<?php

namespace App\Http\Controllers;

use App\Models\News;
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
    public function index()
    {
        return view('home');
    }
    public function berita($id)
    {
        $data=News::find($id);
        return view('landing.detail',compact('data'));
    }
    public function visMisi()
    {
       
        return view('landing.visiMisi');
    }
}
