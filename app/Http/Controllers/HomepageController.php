<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function homepage()
    {
        return view('pages.homepage.index');
    }
    public function starterPage()
    {
        return view('pages.starterPage');
    }
}
