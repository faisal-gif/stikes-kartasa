<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Navbar;
use App\Models\Sub_Menu;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\Vue;
use Mockery\Matcher\Subset;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Navbar::all();
        return view('admin.navbar.index', compact('data'));
    }
    public function index_menu(Navbar $navbar)
    {
        $data = Menu::where('navbar_id', $navbar->id)->get();
        return view('admin.navbar.menu.index', compact('data', 'navbar'));
    }
    public function index_sub_menu(Menu $menu)
    {
        $data = Sub_Menu::where('menu_id', $menu->id)->get();
        return view('admin.navbar.sub_menu.index', compact('data', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.navbar.create');
    }
    public function create_menu(Navbar $navbar)
    {
        return view('admin.navbar.menu.create', compact('navbar'));
    }
    public function create_sub_menu(Menu $menu)
    {

        return view('admin.navbar.sub_menu.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);
        Navbar::create([
            'nama' => $request->nama,
            'type' => $request->tipe,
        ]);
        return redirect()->route('navbar.index');
    }
    public function store_menu(Request $request, Navbar $navbar)
    {
        $request->validate([
            'nama.*' => 'required'
        ]);
        foreach ($request->nama as $key => $value) {
            Menu::create([
                'nama' => $value,
                'type' => $request->tipe[$key],
                'navbar_id' => $navbar->id
            ]);
        }
        return redirect()->route('menu.index', $navbar);
    }
    public function store_sub_menu(Request $request, Menu $menu)
    {
        $request->validate([
            'nama.*' => 'required',
            'url.*' => 'required'
        ]);
        foreach ($request->nama as $key => $value) {
            Sub_Menu::create([
                'nama' => $value,
                'url' => $request->url[$key],
                'menu_id' => $menu->id
            ]);
        }
        return redirect()->route('sub_menu.index', $menu);
    }

    /**
     * Display the specified resource.
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navbar $navbar)
    {
        return view('admin.navbar.edit', compact('navbar'));
    }
    public function edit_menu(Menu $menu,Navbar $navbar)
    {
        return view('admin.navbar.menu.edit', compact('menu','navbar'));
    }
    public function edit_sub_menu(Sub_Menu $sub_menu, Menu $menu)
    {
        return view('admin.navbar.sub_menu.edit', compact('sub_menu','menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Navbar $navbar)
    {
        
        $navbar->nama = $request->nama;
        $navbar->type = $request->tipe;
        $navbar->save();
        return redirect()->route('navbar.index');
    }
    public function update_menu(Request $request, Menu $menu, Navbar $navbar)
    {
        $menu->nama = $request->nama;
        $menu->type = $request->tipe;
        $menu->save();
        return redirect()->route('menu.index',$navbar);
    }
    public function update_sub_menu(Request $request,Sub_Menu $sub_menu, Menu $menu )
    {
        $sub_menu->nama = $request->nama;
        $sub_menu->url = $request->url;
        $sub_menu->save();
        return redirect()->route('sub_menu.index',$menu);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navbar $navbar)
    {
        $navbar->delete();
        return redirect()->route('navbar.index');
    }
    public function destroy_menu(Menu $menu,Navbar $navbar)
    {
        $menu->delete();
        return redirect()->route('menu.index',$navbar);
    }
    public function destroy_sub_menu(Sub_Menu $sub_menu,Menu $menu)
    {
        $sub_menu->delete();
        return redirect()->route('sub_menu.index',$menu);
    }

    public function url(Navbar $navbar)
    {
        return view('admin.navbar.url',compact('navbar'));
    }
    public function menu_url(Menu $menu,Navbar $navbar)
    {
        return view('admin.navbar.menu.url',compact('menu','navbar'));
    }
   
    public function store_url(Request $request, Navbar $navbar)
    {
        $navbar->url = $request->url;
        $navbar->save();
        return redirect()->route('navbar.index');
    }
    public function store_menu_url(Request $request, Menu $menu , Navbar $navbar)
    {
        $menu->url = $request->url;
        $menu->save();
        return redirect()->route('menu.index',$navbar);
    }
  
}
