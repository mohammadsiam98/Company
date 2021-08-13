<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientReviewsController extends Controller
{
    //reviews
    public function reviews()
    {
        return view('pages.reviews.clientReview');
    }
}
