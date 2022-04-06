<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecentlyReadController extends Controller
{
    public function index()
    {
        return view('recently_read');
    }
}
