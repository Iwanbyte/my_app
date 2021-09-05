<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    //
    public function index(){
        $artikels = Artikel::get();
        return view('artikel.index', ['artikels' => $artikels]);
    }

    public function store(Request $request){
        $artikel = new Artikel();
        $artikel->title = $request->get('title');
        $artikel->content = $request->get('content');
        $artikel->save();

        return redirect()->route('artikel-page')->with('pesan', 'Data artikels berhasil dibuat');
    }

    public function edit($id){
        $artikel = Artikel::find($id);
        return view('artikel.edit', ['artikel' => $artikel]);
    }

    public function update(Request $request, $id){
        $artikel = Artikel::find($id);
        $artikel->title = $request->get('title');
        $artikel->content = $request->get('content');
        $artikel->save();

        return redirect()->route('artikel-page')->with('pesan', 'data berhasil diupdate');
    }

    public function delete($id){
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect()->route('artikel-page')->with('pesan', 'Data berhasil dihapus');
    }

}
