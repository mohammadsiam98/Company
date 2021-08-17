<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ServicesCategory;
use App\Models\SectorTechnologiesWeWillUse;
use App\Models\SectorServices;

class SectorTechnologiesController extends Controller
{
    
    public function list()
    {
        //
        $SectorTechnologiesWeWillUse = SectorTechnologiesWeWillUse::all();
        return view ('pages.CRUD_SectorTechnologiesWeWillUse.list',compact('SectorTechnologiesWeWillUse'));
    }

    
    public function create()
    {
        //
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_SectorTechnologiesWeWillUse.create',compact('categorylist'));
    }

    
    public function store(Request $request)
    {
        //
        $SectorTechnologiesWeWillUse = new SectorTechnologiesWeWillUse;
        $SectorTechnologiesWeWillUse->technology_main_title = $request->technology_main_title;
        $SectorTechnologiesWeWillUse->technology_main_title_short_details = $request->technology_main_title_short_details;
        $SectorTechnologiesWeWillUse->technology_name = $request->technology_name;
        $SectorTechnologiesWeWillUse->technology_short_details = $request->technology_short_details;
        $SectorTechnologiesWeWillUse->category_id=$request->category_id;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $SectorTechnologiesWeWillUse->image ="storage/img/".$image->hashName();
        $SectorTechnologiesWeWillUse->save();
        return redirect()->route('SectorTechnologiesWeWillUse.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorTechnologiesWeWillUse = SectorTechnologiesWeWillUse::find($id); 
        $categorylist = ServicesCategory::all(); 
        return view('pages.CRUD_SectorTechnologiesWeWillUse.edit',compact('SectorTechnologiesWeWillUse','categorylist'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorTechnologiesWeWillUse =SectorTechnologiesWeWillUse::find($id);
        $SectorTechnologiesWeWillUse->technology_main_title = $request->technology_main_title;
        $SectorTechnologiesWeWillUse->technology_main_title_short_details = $request->technology_main_title_short_details;
        $SectorTechnologiesWeWillUse->technology_name = $request->technology_name;
        $SectorTechnologiesWeWillUse->technology_short_details = $request->technology_short_details;
        $SectorTechnologiesWeWillUse->category_id=$request->category_id;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $SectorTechnologiesWeWillUse->image ="storage/img/".$image->hashName();
        }
        $SectorTechnologiesWeWillUse->save();
        return redirect()->route('SectorTechnologiesWeWillUse.list')->with('success','Created Successfully');
    }

    
    public function destroy($id)
    {
        //
        $SectorTechnologiesWeWillUse = SectorTechnologiesWeWillUse::find($id);
        $SectorTechnologiesWeWillUse->delete();
        return redirect()->route('SectorTechnologiesWeWillUse.list')->with('success',"Deleted Successfully");
    }
}
