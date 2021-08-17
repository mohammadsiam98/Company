<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ServicesCategory;
use App\Models\SectorCreativeWorks;

class SectorCreativeWorksController extends Controller
{
    
    public function list()
    {
        //
        $SectorCreativeWorks = SectorCreativeWorks::all();
        return view ('pages.CRUD_SectorCreativeWorks.list',compact('SectorCreativeWorks'));
    }

    public function create()
    {
        //
        $categorylist = ServicesCategory::all();
        return view('pages.CRUD_SectorCreativeWorks.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        //
        $SectorCreativeWorks = new SectorCreativeWorks;
        $SectorCreativeWorks->creative_work_name = $request->creative_work_name;
        $SectorCreativeWorks->creative_work_sector = $request->creative_work_sector;
        $SectorCreativeWorks->category_id=$request->category_id;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $SectorCreativeWorks->image ="storage/img/".$image->hashName();
        $SectorCreativeWorks->save();
        return redirect()->route('SectorCreativeWorks.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorCreativeWorks = SectorCreativeWorks::find($id); 
        $categorylist = ServicesCategory::all(); 
        return view('pages.CRUD_SectorCreativeWorks.edit',compact('SectorCreativeWorks','categorylist'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorCreativeWorks =SectorCreativeWorks::find($id);
        $SectorCreativeWorks->creative_work_name = $request->creative_work_name;
        $SectorCreativeWorks->creative_work_sector = $request->creative_work_sector;
        $SectorCreativeWorks->category_id=$request->category_id;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $SectorCreativeWorks->image ="storage/img/".$image->hashName();
        }
        $SectorCreativeWorks->save();
        return redirect()->route('SectorCreativeWorks.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorCreativeWorks = SectorTechnologiesWeWillUse::find($id);
        $SectorCreativeWorks->delete();
        return redirect()->route('SectorCreativeWorks.list')->with('success',"Deleted Successfully");
    }
}
