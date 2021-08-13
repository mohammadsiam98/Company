<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
class AboutUsController extends Controller
{
    //About Us Page
    public function aboutUs()
    {
        return view('pages.about.about');
    }

    public function list()
    {
        $about = AboutUs::all();
        return view ('pages.CRUD_About.list',compact('about'));
    }

    public function create()
    {
        return view('pages.CRUD_About.create');
    }

    public function store(Request $request)
    {
        $about = new AboutUs;
        $about->agency_details = $request->agency_details;
        $about->whyChooseUsDetails = $request->whyChooseUsDetails;
        $about->specialityTitle = $request->specialityTitle;
        $about->specialityDetails = $request->specialityDetails;
        $about->save();
        return redirect()->route('about.list')->with('success',' New Data created Successfully');
    }

    public function edit($id)
    {
        $about = AboutUs::find($id);
        return view('pages.CRUD_About.edit',compact('about'));
    }

    public function update(Request $request, $id)
    {
        //
        $about = AboutUs::find($id);
        $about->agency_details = $request->agency_details;
        $about->whyChooseUsDetails = $request->whyChooseUsDetails;
        $about->specialityTitle = $request->specialityTitle;
        $about->specialityDetails = $request->specialityDetails;
        $about->save();
        return redirect()->route('about.list')->with('success','Updated Successfully');
    }

}
