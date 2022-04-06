<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RecentlyReadController;
use App\Models\Book;
use App\Models\Content;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/recently_read', [RecentlyReadController::class, 'index'])->name('recently_read.index');
Route::get('books/{book:id}/', [BookController::class, 'show'])->name('book.show');
Route::get('genre/{genre:id}', [GenreController::class, 'show'])->name('genre.show');
Route::get('authors/{authors:id}', [AuthorController::class, 'show'])->name('author.show');




