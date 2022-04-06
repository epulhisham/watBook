<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\GenreController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/{id}', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index'])->name('genre');
Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('book');
Route::get('/recently_read', [App\Http\Controllers\RecentlyReadController::class, 'index'])->name('recently_read');




Route::get('books/{book:id}/', [BookController::class, 'show'])->name('book.show');
Route::get('genre/{genre:id}', [GenreController::class, 'show']);
Route::get('authors/{authors:id}', [AuthorController::class, 'show']);




