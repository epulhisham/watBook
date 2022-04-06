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

    // public function update(Book $book)
    // {
    //     $contentId = $book->contents[request()->page - 1]->id;
    //     Mark::where('book_id', $book->id)->update([
    //         'content_id' => $contentId,
    //         'progress' => 20
    //     ]);

    //     // return redirect()->back();
    //     return redirect(route('book.show', [ 'book' => $book->id]));
    //     // return redirect()->action('BookController@show', ['book' => $book]);
    // }
    
}
