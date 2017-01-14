<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index(){
        //$books = DB::table('books')->get();
        $books = Book::all();
        return view('books.index')->with([
                'books' => $books
            ]);
    }

    public function show($id){
        $book = Book::find($id);
        return view('books.show')->with([
                'book' => $book
            ]);
    }
}