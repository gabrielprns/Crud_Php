<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index(){
        $books = Book::all();
        
        return view('games.index')->with('books', $books);
    }

    public function create(){
        return view('games.create');
    }

    public function store(Request $request){
        $nomeBook = $request->input('nome');
        $book = new Book();
        $book->nome = $nomeBook;
        $book->save();
        return redirect('/');
    }
}
