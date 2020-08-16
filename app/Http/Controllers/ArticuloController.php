<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class ArticuloController extends Controller
{
    public function otros(){
        return "TEXTO";
    }

    public function index() {
        $articulos = App\Articulo::all();
        
        return view('template', compact('articulos'));
    }

    public function store(Request $request) {
        $articulo = new App\Articulo();
        $articulo->title = $request->title;
        $articulo->author = $request->author;
        $articulo->category = $request->category;
        $articulo->year = $request->year;

        $articulo->save();
        return back()->with('mensaje', 'The book has been added ... ');
    }

    public function editar($id){
        $articulo = App\Articulo::findOrFail($id);

        return view('articulos/editar', compact('articulo'));
    }

    public function guardar(Request $request, $id){
        $articulo = App\Articulo::findOrFail($id);
        $articulo->title = $request->title;
        $articulo->author = $request->author;
        $articulo->category = $request->category;
        $articulo->year = $request->year;

        $articulo->save();

        return back()->with('mensaje', 'The book has been updated ...');
    }

    public function eliminar($id){

        $articulo = App\Articulo::findOrFail($id);
        
        $articulo->delete();

        return back()->with('mensaje', "The book has been deleted ...");
    }


    public function show() {
        return "Metodo show";
    }
}
