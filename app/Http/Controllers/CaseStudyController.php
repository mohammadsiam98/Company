<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CaseStudy;
use App\Models\ServicesCategory;
use DB;
class CaseStudyController extends Controller
{
    //
    public function caseStudy()
    {
        $caseStudyDetails = DB::table('case_studies')->get();  
        return view('pages.caseStudy.caseStudy',compact('caseStudyDetails'));
    }

    public function allCaseStudy($id)
    {
        $singleCaseStudy = CaseStudy::find($id);
        // dd($singleCaseStudy);
        return view('pages.caseStudy.caseStudySingle',compact('singleCaseStudy'));
    }

   


    public function create()
    {
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_CaseStudy.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        //
        $CaseStudyDetails = new CaseStudy;
        $CaseStudyDetails->thumbnail_case_study_title = $request->thumbnail_case_study_title;
        $CaseStudyDetails->About_the_project_title = $request->About_the_project_title;
        $CaseStudyDetails->About_the_project_details = $request->About_the_project_details;
        $CaseStudyDetails->app_features = $request->app_features;
        $CaseStudyDetails->challenges = $request->challenges;
        $CaseStudyDetails->solution_title = $request->solution_title;
        $CaseStudyDetails->solution_details = $request->solution_details;
        $CaseStudyDetails->client_name = $request->client_name;
        $CaseStudyDetails->client_designation = $request->client_designation;
        $CaseStudyDetails->client_testimonials = $request->client_testimonials;
        $CaseStudyDetails->category_id=$request->category_id;

        $image  = $request->file('thumbnail_case_study_image');
        Storage::putFile('public/img/',$image);
        $CaseStudyDetails->thumbnail_case_study_image ="storage/img/".$image->hashName();

        $image1  = $request->file('About_the_project_image');
        Storage::putFile('public/img/',$image1);
        $CaseStudyDetails->About_the_project_image ="storage/img/".$image1->hashName();


        $CaseStudyDetails->save();
        return redirect()->route('CaseStudy.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $CaseStudyDetails = CaseStudy::find($id); 
        $categorylist = ServicesCategory::all(); 
        return view('pages.CRUD_CaseStudy.edit',compact('CaseStudyDetails','categorylist'));
    }

    public function list()
    {
        //
        $CaseStudyDetails = CaseStudy::all();
        return view ('pages.CRUD_CaseStudy.list',compact('CaseStudyDetails'));
    }

    public function update(Request $request, $id)
    {
        //
        $CaseStudyDetails = CaseStudy::find($id);
        $CaseStudyDetails->thumbnail_case_study_title = $request->thumbnail_case_study_title;
        $CaseStudyDetails->About_the_project_title = $request->About_the_project_title;
        $CaseStudyDetails->About_the_project_details = $request->About_the_project_details;
        $CaseStudyDetails->app_features = $request->app_features;
        $CaseStudyDetails->challenges = $request->challenges;
        $CaseStudyDetails->solution_title = $request->solution_title;
        $CaseStudyDetails->solution_details = $request->solution_details;
        $CaseStudyDetails->client_name = $request->client_name;
        $CaseStudyDetails->client_designation = $request->client_designation;
        $CaseStudyDetails->client_testimonials = $request->client_testimonials;
        $CaseStudyDetails->category_id=$request->category_id;



        if($request->file('thumbnail_case_study_image')){
            $image  = $request->file('thumbnail_case_study_image');
            Storage::putFile('public/img/',$image);
            $CaseStudyDetails->thumbnail_case_study_image ="storage/img/".$image->hashName();
        }

        if($request->file('About_the_project_image')){
            $image1  = $request->file('About_the_project_image');
            Storage::putFile('public/img/',$image1);
            $CaseStudyDetails->About_the_project_image ="storage/img/".$image1->hashName();
        }

        $CaseStudyDetails->save();
        return redirect()->route('CaseStudy.list')->with('success','Edited Successfully');
    }



}
