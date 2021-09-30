<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesCategory;
use App\Models\PricingBasic;
class PricingBasicController extends Controller
{
   
    public function list()
    {
        //
        $SectorPricingbasic = PricingBasic::all();
        return view ('pages.CRUD_BasicPlan.list',compact('SectorPricingbasic'));
    }

    public function create()
    {
        //
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_BasicPlan.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        //
        $SectorPricingbasic = new PricingBasic;
        $SectorPricingbasic->planName = $request->planName;
        $SectorPricingbasic->small_description = $request->small_description;
        $SectorPricingbasic->basic_plan_price = $request->basic_plan_price;
        $SectorPricingbasic->category_id=$request->category_id;
        $SectorPricingbasic->save();
        return redirect()->route('BasicPlan.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorPricingbasic = PricingBasic::find($id); 
        $categorylist = ServicesCategory::all(); 
        return view('pages.CRUD_BasicPlan.edit',compact('SectorPricingbasic','categorylist'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorPricingbasic =PricingBasic::find($id);
        $SectorPricingbasic->planName = $request->planName;
        $SectorPricingbasic->small_description = $request->small_description;
        $SectorPricingbasic->basic_plan_price = $request->basic_plan_price;
        $SectorPricingbasic->category_id=$request->category_id;
        $SectorPricingbasic->save();
        return redirect()->route('BasicPlan.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorPricingbasic = PricingBasic::find($id);
        $SectorPricingbasic->delete();
        return redirect()->route('BasicPlan.list')->with('success',"Deleted Successfully");
    }
}
