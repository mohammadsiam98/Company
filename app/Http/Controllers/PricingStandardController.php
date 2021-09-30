<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServicesCategory;
use App\Models\PricingStandard;

class PricingStandardController extends Controller
{
   
    public function list()
    {
        //
        $SectorPricingStandard = PricingStandard::all();
        return view ('pages.CRUD_standard.list',compact('SectorPricingStandard'));
    }

    public function create()
    {
        //
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_standard.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        //
        $SectorPricingstandard = new PricingStandard;
        $SectorPricingstandard->planName = $request->planName;
        $SectorPricingstandard->small_description = $request->small_description;
        $SectorPricingstandard->standard_plan_price = $request->standard_plan_price;
        $SectorPricingstandard->category_id=$request->category_id;
        $SectorPricingstandard->save();
        return redirect()->route('standard.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorPricingstandard = PricingStandard::find($id); 
        $categorylist = ServicesCategory::all(); 
        return view('pages.CRUD_standard.edit',compact('SectorPricingstandard','categorylist'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorPricingbasic =PricingStandard::find($id);
        $SectorPricingstandard->planName = $request->planName;
        $SectorPricingstandard->small_description = $request->small_description;
        $SectorPricingstandard->standard_plan_price = $request->standard_plan_price;
        $SectorPricingstandard->category_id=$request->category_id;
        $SectorPricingbasic->save();
        return redirect()->route('standard.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorPricingstandard = PricingStandard::find($id);
        $SectorPricingstandard->delete();
        return redirect()->route('standard.list')->with('success',"Deleted Successfully");
    }
}
