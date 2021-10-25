<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\CaseStudy;
use App\Models\About_the_project_images;
class CaseStudyAboutTheProjectStackImagesController extends Controller
{
    public function list()
    {
        //
        $stackImagesCaseStudySingleProject = About_the_project_images::all();
        return view ('pages.CRUD_caseStudyAboutProjectStackImages.list',compact('stackImagesCaseStudySingleProject')); 
    }

    public function create()
    {
        //
        $CaseStudyFetch = CaseStudy::all();
        return view('pages.CRUD_caseStudyAboutProjectStackImages.create',compact('CaseStudyFetch'));
    }

    public function store(Request $request)
    {
        //
        $stackImagesCaseStudySingleProject = new About_the_project_images;
        $stackImagesCaseStudySingleProject->caseStudy_id =$request-> caseStudy_id;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $stackImagesCaseStudySingleProject->image ="storage/img/".$image->hashName();

        $stackImagesCaseStudySingleProject->save();
        return redirect()->route('caseStudyAboutProjectStackImages.create')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $stackImagesCaseStudySingleProject = About_the_project_images::find($id); 
        $CaseStudyFetch = CaseStudy::all();
        return view('pages.CRUD_caseStudyAboutProjectStackImages.edit',compact('stackImagesCaseStudySingleProject','CaseStudyFetch'));
    }

    public function update(Request $request, $id)
    {
        //
        $stackImagesCaseStudySingleProject = About_the_project_images::find($id);
        $stackImagesCaseStudySingleProject->caseStudy_id = $request-> caseStudy_id;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $stackImagesCaseStudySingleProject->image ="storage/img/".$image->hashName();
        }
        $stackImagesCaseStudySingleProject->save();
        return redirect()->route('caseStudyAboutProjectStackImages.list')->with('success',"Deleted Successfully");
    }

    public function destroy($id)
    {
        //
        $stackImagesCaseStudySingleProject = About_the_project_images::find($id);
        $stackImagesCaseStudySingleProject->delete();
        return redirect()->route('caseStudyAboutProjectStackImages.list')->with('success',"Deleted Successfully");
    }
}
