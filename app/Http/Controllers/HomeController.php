<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Content;
use App\Models\Genre;
use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::latest()->take(3)->get();
        $authors = Author::all();
        $genres = Genre::all();
        return view('home', compact('books','authors','genres'));
    }


    // public function store($id)
    // {
    //     Mark::create([
    //         'user_id' => Auth::user()->id,
    //         'book_id' => $id,
    //         'content_id' => null,
    //         'progress' => 0
    //     ]);
    //     // dd($id);
    //     return redirect(route('book.show', [ 'book' => $id, 'page' => 0]));
    // }
}
