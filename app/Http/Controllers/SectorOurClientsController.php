<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\SectorClients;
use App\Models\ServicesCategory;
class SectorOurClientsController extends Controller
{
    public function list()
    {
        //
        $SectorWiseClients = SectorClients::all();
        return view ('pages.CRUD_Sector_Clients.list',compact('SectorWiseClients'));
    }
   
    public function create()
    {
        //
        $categorylist= ServicesCategory::all();
        return view('pages.CRUD_Sector_Clients.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        //
        

        $SectorWiseClients = new SectorClients;
        $SectorWiseClients->clients_header = $request->clients_header;
        $SectorWiseClients->clients_header_description = $request->clients_header_description;
        $SectorWiseClients->category_id=$request->category_id;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $SectorWiseClients->image ="storage/img/".$image->hashName();

        $SectorWiseClients->save();
      
        return redirect()->route('sectorClients.list')->with('success','Created Successfully');
    }
   
    public function edit($id)
    {
        //
        $SectorWiseClients = SectorClients::find($id);
        $categorylist= ServicesCategory::all();
        return view('pages.CRUD_Sector_Clients.edit',compact('SectorWiseClients','categorylist'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorWiseClients  = SectorClients::find($id);
        $SectorWiseClients = $request->category_id;
        $SectorWiseClients = $request->clients_header;
        $SectorWiseClients = $request->clients_header_description;
        if($request->file('image'))
        {
            $clients_image  = $request->file('image');
            Storage::putFile('public/img/',$clients_image);
            $SectorWiseClients->clients_image ="storage/img/".$clients_image->hashName();
        }
        $SectorWiseClients->save();
        return redirect()->route('sectorClients.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorWiseClients = SectorClients::find($id);
        $SectorWiseClients->delete();
        return redirect()->route('sectorClients.list')->with('success',"Deleted Successfully");
    }
}
