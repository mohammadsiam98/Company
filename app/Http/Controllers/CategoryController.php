<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesCategory;
class CategoryController extends Controller
{

    public function list()
    {
        //
        $ServicesCategory = ServicesCategory::all();
        return view ('pages.CRUD_ServicesCategory.list',compact('ServicesCategory'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_ServicesCategory.create');
    }

    public function store(Request $request)
    {
        //
        $ServicesCategory = new ServicesCategory;
        $ServicesCategory->category_name = $request->category_name;
        $ServicesCategory->save();
        return redirect()->route('ServicesCategory.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $ServicesCategory = ServicesCategory::find($id);
        return view('pages.CRUD_ServicesCategory.edit',compact('ServicesCategory'));
    }

    public function update(Request $request, $id)
    {
        //
        $ServicesCategory = ServicesCategory::find($id);
        $ServicesCategory->category_name = $request->category_name;
        $ServicesCategory->save();
        return redirect()->route('ServicesCategory.list')->with('success','Updated Successfully');
        
    }

    public function destroy($id)
    {
        //
        $ServicesCategory = ServicesCategory::find($id);
        $ServicesCategory->delete();
        return redirect()->route('ServicesCategory.list')->with('success',"Deleted Successfully");
    }
}
