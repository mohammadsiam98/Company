<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\CreativeWork;
class CreativepageController extends Controller
{
    //
    public function homepage()
    {
        return view('pages.homepage.index');
    }

    public function list()
    {
        //
        $CreativeWork = CreativeWork::all();
        return view ('pages.CRUD_Creative_work.list',compact('CreativeWork'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_Creative_work.create');

    }

    public function store(Request $request)
    {
        $CreativeWork = new CreativeWork;
        $CreativeWork->creative_work_name = $request->creative_work_name;
        $CreativeWork->creative_work_sector_name = $request->creative_work_sector_name;
        $creative_work_image  = $request->file('creative_work_image');
        Storage::putFile('public/img/',$creative_work_image);
        $CreativeWork->creative_work_image ="storage/img/".$creative_work_image->hashName();
        $CreativeWork->save();
        return redirect()->route('creative_work.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        $CreativeWork = CreativeWork::find($id);
        return view('pages.CRUD_Creative_work.edit',compact('CreativeWork'));
    }

    public function update(Request $request, $id)
    {
        $CreativeWork                     = CreativeWork::find($id);
        $CreativeWork->creative_work_name = $request->creative_work_name;
        $CreativeWork->creative_work_sector_name = $request->creative_work_sector_name;

        if($request->file('image')){
            $creative_work_image  = $request->file('image');
            Storage::putFile('public/img/',$creative_work_image);
            $sliders->image ="storage/img/".$creative_work_image->hashName();
        }
        $CreativeWork->save();
        
        return redirect()->route('creative_work.list')->with('success','Updated Successfully');
    }

  
    public function destroy($id)
    {
        //
        $CreativeWork = CreativeWork::find($id);
        $CreativeWork->delete();
        return redirect()->route('creative_work.list')->with('success',"Deleted Successfully");
    }

}
