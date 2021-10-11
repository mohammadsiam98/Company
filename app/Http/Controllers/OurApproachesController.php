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
    public function list()
    {
        $OurApproaches = OurApproaches::all();
        return view ('pages.CRUD_OurApproaches.list',compact('OurApproaches'));
    }

    public function create()
    {
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_OurApproaches.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        $OurApproaches = new OurApproaches;
        $OurApproaches->Approach_title = $request->Approach_title;
        $OurApproaches->Approach_details = $request->Approach_details;
        $OurApproaches->category_title = $request->category_title;
        $OurApproaches->category_description = $request->category_description;
        $OurApproaches->category_id=$request->category_id;
        $OurApproaches->save();
        return redirect()->route('OurApproaches.list')->with('success',' New Data created Successfully');
    }

    public function edit($id)
    {
        $OurApproaches = OurApproaches::find($id);
        $categorylist = ServicesCategory::all(); 
        return view('pages.CRUD_OurApproaches.edit',compact('OurApproaches','categorylist'));
    }

    public function update(Request $request, $id)
    {
        //
        $OurApproaches = OurApproaches::find($id);
        $OurApproaches->Approach_title = $request->Approach_title;
        $OurApproaches->Approach_details = $request->Approach_details;
        $OurApproaches->category_title = $request->category_title;
        $OurApproaches->category_description = $request->category_description;
        $OurApproaches->category_id=$request->category_id;
        $OurApproaches->save();
        return redirect()->route('OurApproaches.list')->with('success','Updated Successfully');
    }
    public function destroy($id)
    {
        //
        $OurApproaches = OurApproaches::find($id);
        $OurApproaches->delete();
        return redirect()->route('OurApproaches.list')->with('success',"About Us Deleted Successfully");
    }


}
