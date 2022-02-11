<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ServicesCategory;
use App\Models\ServiceOverviewDetails;
use DB;
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
        // Validation
        $request->validate([
            'page_heading'=>'required',
            'service_overview_title'=>'required',
            'service_overview_details'=>'required',
            'category_id'=>'required',
            'image'=>'required'
        ]);

        $if_a_serviceOverview_is_already_written = DB::table('service_overview_details')->where('category_id',$request->category_id)->first();
        if (empty($if_a_serviceOverview_is_already_written))
        {
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
        else{
            return 'In this category there is already data inserted.';
        }

       
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
