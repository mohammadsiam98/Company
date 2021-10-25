<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
use App\Models\CaseStudy;
use App\Models\CaseStudyAppImagesSlider;

class CaseStudyImageSliderController extends Controller
{
    public function list()
    {
        //
        $sliders = CaseStudyAppImagesSlider::all();
        return view ('pages.CRUD_AppImagesSlider.list',compact('sliders')); 
    }

    public function create()
    {
        //
        $CaseStudyFetch  = CaseStudy::all();
        return view('pages.CRUD_AppImagesSlider.create',compact('CaseStudyFetch'));
    }

    public function store(Request $request)
    {
        //
        $sliders = new CaseStudyAppImagesSlider;
        $sliders->caseStudy_id =$request-> caseStudy_id;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $sliders->image ="storage/img/".$image->hashName();

        $sliders->save();
        return redirect()->route('caseStudyslider.create')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $sliders = CaseStudyAppImagesSlider::find($id); 
        $CaseStudyFetch = CaseStudy::all();
        return view('pages.CRUD_AppImagesSlider.edit',compact('sliders','CaseStudyFetch'));
    }

    public function update(Request $request, $id)
    {
        //
        $sliders = CaseStudyAppImagesSlider::find($id);
        $sliders->caseStudy_id = $request-> caseStudy_id;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $sliders->image ="storage/img/".$image->hashName();
        }
        $sliders->save();
        return redirect()->route('caseStudyslider.list')->with('success',"Deleted Successfully");
    }

    public function destroy($id)
    {
        //
        $sliders = CaseStudyAppImagesSlider::find($id);
        $sliders->delete();
        return redirect()->route('caseStudyslider.list')->with('success',"Deleted Successfully");
    }
}
