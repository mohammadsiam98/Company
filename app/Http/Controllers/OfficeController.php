<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    //
    public function office()
    {
        return view('pages.officeLocation.location');
    }
    public function faq()
    {
        return view('pages.FAQ.faq');
    }
}
