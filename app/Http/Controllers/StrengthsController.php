<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUsStrengthWeakness;
class StrengthsController extends Controller
{

    public function list()
    {
        //
        $strength = AboutUsStrengthWeakness::all();
        return view ('pages.CRUD_strength.list',compact('strength'));

    }

    public function create()
    {
        //
        return view('pages.CRUD_strength.create');
    }

    
    public function store(Request $request)
    {
        //
        $strength = new AboutUsStrengthWeakness;
        $strength->strength_title = $request->strength_title;
        $strength->strength_description = $request->strength_description;
        $strength->save();
        return redirect()->route('strength.list')->with('success',' New Data created Successfully');
    }

    
    public function edit($id)
    {
        //
        $strength = AboutUsStrengthWeakness::find($id);
        return view('pages.CRUD_strength.edit',compact('strength'));
    }

   
    public function update(Request $request, $id)
    {
        //
        $strength = AboutUsStrengthWeakness::find($id);
        $strength->strength_title = $request->strength_title;
        $strength->strength_description = $request->strength_description;
        $strength->save();
        return redirect()->route('strength.list')->with('success','Updated Successfully');
    }

    
    public function destroy($id)
    {
        //
        $strength = AboutUsStrengthWeakness::find($id);
        $strength->delete();
        return redirect()->route('strength.list')->with('success',"Deleted Successfully");
    }
}
