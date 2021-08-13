<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    //
    public function caseStudy()
    {
        return view('pages.caseStudy.caseStudy');
    }
}
