<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ServicesCategory;
use App\Models\ServiceOverviewDetails;

class ServiceOverViewController extends Controller
{
   
    public function list()
    {
        //
        $ServiceOverviewDetails = ServiceOverviewDetails::all();
        return view ('pages.CRUD_ServiceOverviewDetails.list',compact('ServiceOverviewDetails'));
    }

    public function create()
    {
        // 
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_ServiceOverviewDetails.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        //
        $ServiceOverviewDetails = new ServiceOverviewDetails;
        $ServiceOverviewDetails->page_heading = $request->page_heading;
        $ServiceOverviewDetails->service_overview_title = $request->service_overview_title;
        $ServiceOverviewDetails->service_overview_details = $request->service_overview_details;
        $ServiceOverviewDetails->category_id=$request->category_id;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $ServiceOverviewDetails->image ="storage/img/".$image->hashName();
        $ServiceOverviewDetails->save();
        return redirect()->route('ServiceOverviewDetails.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $ServiceOverviewDetails = ServiceOverviewDetails::find($id);
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_ServiceOverviewDetails.edit',compact('ServiceOverviewDetails','categorylist'));

    }

    public function update(Request $request, $id)
    {
        //
        $ServiceOverviewDetails = ServiceOverviewDetails::find($id);
        $ServiceOverviewDetails->page_heading = $request->page_heading;
        $ServiceOverviewDetails->service_overview_title = $request->service_overview_title;
        $ServiceOverviewDetails->service_overview_details = $request->service_overview_details;
        $ServiceOverviewDetails->category_id=$request->category_id;
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $ServiceOverviewDetails->image ="storage/img/".$image->hashName();
        }
        $ServiceOverviewDetails->save();
        return redirect()->route('ServiceOverviewDetails.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $ServiceOverviewDetails = ServiceOverviewDetails::find($id);
        $ServiceOverviewDetails->delete();
        return redirect()->route('ServiceOverviewDetails.list')->with('success',"Deleted Successfully");
    }
}
