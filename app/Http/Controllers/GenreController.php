<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres=Genre::all();
        return view('genre',compact('genres'));
    }

    public function show(Genre $genre)
    {
        $books= $genre->books;
        // dd($genre->name);
        return view('book_genre',compact('books', 'genre'));
    }

    
}
