<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\OurApproaches;
class OurApproachesController extends Controller
{
    //
    public function ourApproaches()
    {
        $OurApproaches1 = OurApproaches::where('id', '1')->first();
        $OurApproaches2 = OurApproaches::where('id', '2')->first();
        $OurApproaches3 = OurApproaches::where('id', '3')->first();
        $OurApproaches4 = OurApproaches::where('id', '4')->first();
        return view('pages.approaches.ourApproaches',compact('OurApproaches1','OurApproaches2','OurApproaches3','OurApproaches4'));
    }
    public function list()
    {
        $OurApproaches = OurApproaches::all();
        return view ('pages.CRUD_OurApproaches.list',compact('OurApproaches'));
    }

    public function create()
    {
        return view('pages.CRUD_OurApproaches.create');
    }

    public function store(Request $request)
    {
        $OurApproaches = new OurApproaches;
        $OurApproaches->Approach_title = $request->Approach_title;
        $OurApproaches->Approach_details = $request->Approach_details;
        $OurApproaches->save();
        return redirect()->route('OurApproaches.list')->with('success',' New Data created Successfully');
    }

    public function edit($id)
    {
        $OurApproaches = OurApproaches::find($id);
        return view('pages.CRUD_OurApproaches.edit',compact('OurApproaches'));
    }

    public function update(Request $request, $id)
    {
        //
        $OurApproaches = OurApproaches::find($id);
        $OurApproaches->Approach_title = $request->Approach_title;
        $OurApproaches->Approach_details = $request->Approach_details;
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
