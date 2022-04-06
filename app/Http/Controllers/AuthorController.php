<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author');
    }

    public function show(Author $authors)
    {
        $books= $authors->books;
        // dd($book->contents->count());
        return view('author',compact('authors', 'books'));
    }
}
