<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ServicesCategory;
use App\Models\ServiceOverviewDetails;
use App\Models\SectorServices;
class SectorServicesController extends Controller
{
   
    public function list()
    {
        //
        $SectorServices = SectorServices::all();
        return view ('pages.CRUD_SectorServices.list',compact('SectorServices'));
    }

    
    public function create()
    {
        //
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_SectorServices.create',compact('categorylist'));
    }

    
    public function store(Request $request)
    {
        //
        $SectorServices = new SectorServices;
        $SectorServices->service_name = $request->service_name;
        $SectorServices->service_details = $request->service_details;
        $SectorServices->category_id=$request->category_id;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $SectorServices->image ="storage/img/".$image->hashName();
        $SectorServices->save();
        return redirect()->route('SectorServices.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorServices = SectorServices::find($id);
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_SectorServices.edit',compact('SectorServices','categorylist'));
    }

    public function update(Request $request, $id)
    {
        //
        $ServiceOverviewDetails = ServiceOverviewDetails::find($id);
        $SectorServices->service_name = $request->page_heading;
        $SectorServices->service_details = $request->service_overview_title;
        $SectorServices->category_id=$request->category_id;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $SectorServices->image ="storage/img/".$image->hashName();
        }
        $SectorServices->save();
        return redirect()->route('SectorServices.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorServices = SectorServices::find($id);
        $SectorServices->delete();
        return redirect()->route('SectorServices.list')->with('success',"Deleted Successfully");
    }
}
