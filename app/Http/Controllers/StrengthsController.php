<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUsStrengthWeakness;
class StrengthsController extends Controller
{

    public function list()
    {
        //
        $about = AboutUsStrengthWeakness::all();
        return view ('pages.CRUD_AboutOne.list',compact('about'));

    }

    public function create()
    {
        //
        return view('pages.CRUD_AboutOne.create');
    }

    
    public function store(Request $request)
    {
        //
        $about = new AboutUsStrengthWeakness;
        $about->strength_title = $request->strength_title;
        $about->strength_description = $request->strength_description;
        $about->save();
        return redirect()->route('strength.list')->with('success',' New Data created Successfully');
    }

    
    public function edit($id)
    {
        //
        $about = AboutUsStrengthWeakness::find($id);
        return view('pages.CRUD_AboutOne.edit',compact('about'));
    }

   
    public function update(Request $request, $id)
    {
        //
        $about = AboutUsStrengthWeakness::find($id);
        $about->strength_title = $request->strength_title;
        $about->strength_description = $request->strength_description;
        $about->save();
        return redirect()->route('strength.list')->with('success','Updated Successfully');
    }

    
    public function destroy($id)
    {
        //
        $about = AboutUsStrengthWeakness::find($id);
        $about->delete();
        return redirect()->route('strength.list')->with('success',"Deleted Successfully");
    }
}
