<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Mark;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books=Book::all();
        return view('book',compact('books'));
    }

    public function show(Book $book) 
    {
        $page = $book->contents[request()->page]->content;
        return view('content', compact('book', 'page'));
    }


    
}
