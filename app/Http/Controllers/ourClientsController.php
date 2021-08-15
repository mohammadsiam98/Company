<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ourClients;
class ourClientsController extends Controller
{
    
    public function list()
    {
        //
        $ourClients = ourClients::all();
        return view ('pages.CRUD_Our_Clients.list',compact('ourClients'));
    }
   
    public function create()
    {
        //
        return view('pages.CRUD_Our_Clients.create');
    }

    public function store(Request $request)
    {
        //
        $ourClients = new ourClients;
        $clients_image  = $request->file('clients_image');
        Storage::putFile('public/img/',$clients_image);
        $ourClients->clients_image ="storage/img/".$clients_image->hashName();
        $ourClients->save();
        return redirect()->route('ourClients.list')->with('success','Created Successfully');
    }
   
    public function edit($id)
    {
        //
        $ourClients = ourClients::find($id);
        return view('pages.CRUD_Our_Clients.edit',compact('ourClients'));
    }

    public function update(Request $request, $id)
    {
        //
        $ourClients                     = ourClients::find($id);
        if($request->file('image')){
            $clients_image  = $request->file('clients_image');
            Storage::putFile('public/img/',$clients_image);
            $ourClients->clients_image ="storage/img/".$clients_image->hashName();
        }
        $ourClients->save();
        
        return redirect()->route('ourClients.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $ourClients = ourClients::find($id);
        $ourClients->delete();
        return redirect()->route('ourClients.list')->with('success',"Deleted Successfully");
    }
}
