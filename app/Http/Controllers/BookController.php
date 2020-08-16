<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class BookController extends Controller
{
    public function others(){
        return "TEXTO";
    }

    public function index() {
        $books = App\Book::all();
        
        return view('book', compact('books'));
    }

    public function store(Request $request) {
        $book = new App\Book();
        $book->name = $request->name;
        $book->editorial = $request->editorial;
        $book->author = $request->author;
        $book->genres = $request->genres;
        $book->country = $request->country;
        $book->year = $request->year;

        $book->save();
        return back()->with('mensaje', 'The book has been added ... ');
    }

    public function edit($id){
        $book = App\Book::findOrFail($id);

        return view('library/edit', compact('book'));
    }

    public function save(Request $request, $id){
        $book = App\Book::findOrFail($id);
        $book->name = $request->name;
        $book->editorial = $request->editorial;
        $book->author = $request->author;
        $book->genres = $request->genres;
        $book->country = $request->country;
        $book->year = $request->year;

        $book->save();

        return back()->with('mensaje', 'The book has been updated ...');
    }

    public function delete($id){

        $book = App\Book::findOrFail($id);
        
        $book->delete();

        return back()->with('mensaje', "The book has been deleted ...");
    }


    public function show() {
        return "Metodo show";
    }
}
