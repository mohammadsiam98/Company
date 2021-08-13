<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPagesController extends Controller
{
    //
    public function blog()
    {
        return view('pages.blog.blog');
    }
}
