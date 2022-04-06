<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        $books = Book::all();
        return view('content',compact('contents','books'));
    }


}
