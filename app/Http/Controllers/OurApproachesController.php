<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\ServicesCategory;
use App\Models\OurApproaches;

class OurApproachesController extends Controller
{
    //
    public function ourApproaches()
    {
        return view ('pages.approaches.ourApproaches');
    }

}
