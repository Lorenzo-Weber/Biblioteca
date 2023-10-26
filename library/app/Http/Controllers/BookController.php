<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $livros = Book::all();
        
        return view('index', compact('livros'));
    }

    public function addBook()
    {
        return view('addBook');
    }

    public function searchBook() {
        return view('searchBook');
    }

    public function book ($id) {

        $livro = Book::find($id);

        return view('livro', compact('livro'));
    }

    public function edit ($id) {

        $livro = Book::findOrFail($id);

        if(empty($livro->review)) $livro->review = "";

        return view('editBook', compact('livro'));
    }

    public function store (Request $request) {
        
        $livro = new Book;

        $livro->title = strtolower($request->title);
        $livro->author = strtolower($request->author);
        $livro->review = strtolower($request->review);
        $livro->rating = $request->rating;
        $livro->date = date('Y-m-d');

        if($livro->rating > 10) {
            $livro->rating = 10;
        } elseif ($livro->rating < 0) {
            $livro->rating = 0;
        }

        $livro->save();

        return redirect('/');

    }

    public function show (Request $request) {

        $rq = strtolower($request->title);


        // Setar caractere especial para não encontrar nada
        if($rq == "") $rq = "@";

        $livro = Book::where('title', 'like', '%'.$rq.'%')->get();
        $livro = $livro->first();
        
        return view('livro', compact('livro'));
    }

    public function delete (Request $request) {

        $livro = Book::find($request->id);

        $livro->delete();

        return redirect('/');
    }

    public function update (Request $request) {

        Book::findOrFail($request->id)->update($request->all());

        $livro = Book::find($request->id);

        return redirect('/');
    }
}
