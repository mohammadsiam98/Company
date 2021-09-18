<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\SectorTechnologiesDetails;
use App\Models\SectorTechnologiesWeWillUse;
class SectorStackTechnologiesController extends Controller
{
   
    public function list()
    {
        //
        $stackDetails = SectorTechnologiesDetails::all();
        return view ('pages.CRUD_stackDetails.list',compact('stackDetails')); 
    }

    public function create()
    {
        //
        $stackList = SectorTechnologiesWeWillUse::all();
        return view('pages.CRUD_stackDetails.create',compact('stackList'));
    }

    public function store(Request $request)
    {
        //
        $stackDetails = new SectorTechnologiesDetails;
        $stackDetails->stack_id =$request-> stack_id;
        
        $stackDetails->technology_name = $request->technology_name;      
        $stackDetails->technology_short_details= $request->technology_short_details;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $stackDetails->image ="storage/img/".$image->hashName();

        $stackDetails->save();
        return redirect()->route('sector_technologies_details.create')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $stackDetails = SectorTechnologiesDetails::find($id); 
        $stackList = SectorTechnologiesWeWillUse::all();
        return view('pages.CRUD_stackDetails.edit',compact('stackDetails','stackList'));
    }

    public function update(Request $request, $id)
    {
        //
        $stackDetails = SectorTechnologiesDetails::find($id);
        $stackDetails->stack_id =$request-> stack_id;
        
        $stackDetails->technology_name = $request->technology_name;      
        $stackDetails->technology_short_details= $request->technology_short_details;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $stackDetails->image ="storage/img/".$image->hashName();
        }
        $stackDetails->save();
        return redirect()->route('sector_technologies_details.list')->with('success',"Deleted Successfully");
    }

    public function destroy($id)
    {
        //
        $stackDetails = SectorTechnologiesDetails::find($id);
        $stackDetails->delete();
        return redirect()->route('sector_technologies_details.list')->with('success',"Deleted Successfully");
    }
}
