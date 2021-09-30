<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PricingStandard;
use App\Models\PricingStandardDetails;

class PricingStandardDetailsController extends Controller
{
    public function list()
    {
        //
        $SectorPricingstandardDetails = PricingStandardDetails::all();
        return view ('pages.CRUD_standardDetails.list',compact('SectorPricingstandardDetails'));
    }

    public function create()
    {
        //
        $SectorPricingstandard = PricingStandard::all();
        return view('pages.CRUD_standardDetails.create',compact('SectorPricingstandard'));
    }

    public function store(Request $request)
    {
        //
        $SectorPricingstandardDetails = new PricingStandardDetails;
        $SectorPricingstandardDetails->standardPlan_id = $request->standardPlan_id;      
        $SectorPricingstandardDetails->services_name= $request->services_name;
        $SectorPricingstandardDetails->save();
        return redirect()->route('standardDetails.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorPricingstandardDetails = PricingStandardDetails::find($id); 
        $SectorPricingstandard = PricingBasic::all();
        return view('pages.CRUD_standardDetails.edit',compact('SectorPricingstandardDetails','SectorPricingstandard'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorPricingstandardDetails = PricingStandardDetails::find($id);
        $SectorPricingstandardDetails->standardPlan_id = $request->standardPlan_id;      
        $SectorPricingstandardDetails->services_name= $request->services_name;
        $SectorPricingstandardDetails->save();
        return redirect()->route('standardDetails.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorPricingstandardDetails = PricingStandardDetails::find($id);
        $SectorPricingstandardDetails->delete();
        return redirect()->route('standardDetails.list')->with('success',"Deleted Successfully");
    }
}
