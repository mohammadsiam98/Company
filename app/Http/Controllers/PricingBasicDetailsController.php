<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PricingBasic;
use App\Models\PricingBasicDetails;

class PricingBasicDetailsController extends Controller
{
    public function list()
    {
        //
        $SectorPricingbasicDetails = PricingBasicDetails::all();
        return view ('pages.CRUD_basicServicesName.list',compact('SectorPricingbasicDetails'));
    }

    public function create()
    {
        //
        $basicPlan = PricingBasic::all();
        $SectorPricingbasic = PricingBasic::all();
        return view('pages.CRUD_basicServicesName.create',compact('SectorPricingbasic','basicPlan'));
    }

    public function store(Request $request)
    {
        //
        $SectorPricingbasicDetails = new PricingBasicDetails;
        $SectorPricingbasicDetails->basicPlan_id = $request->basicPlan_id;      
        $SectorPricingbasicDetails->services_name= $request->services_name;
        $SectorPricingbasicDetails->save();
        return redirect()->route('basicDetails.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorPricingbasicDetails = PricingBasicDetails::find($id); 
        $SectorPricingbasic = PricingBasic::all();
        return view('pages.CRUD_basicServicesName.edit',compact('SectorPricingbasicDetails','SectorPricingbasic'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorPricingbasicDetails = PricingBasicDetails::find($id);
        $SectorPricingbasicDetails->basicPlan_id = $request->basicPlan_id;      
        $SectorPricingbasicDetails->services_name= $request->services_name;
        $SectorPricingbasicDetails->save();
        return redirect()->route('basicDetails.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorPricingbasicDetails = PricingBasicDetails::find($id);
        $SectorPricingbasicDetails->delete();
        return redirect()->route('basicDetails.list')->with('success',"Deleted Successfully");
    }
}
