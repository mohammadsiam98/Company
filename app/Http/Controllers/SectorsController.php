<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectorsController extends Controller
{
    //This Function is dynamic
    public function sector()
    {
        return view('pages.marketingSectors.serviceMarketing');
    }
    
}
