<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Session;

class CategoryController extends Controller
{
    public function addcategory(){
    	return view('admin.pages.add_category');
    }
    
    public function savecategory(Request $request)
    {
    	category::savecategoryinfo($request);
    	return redirect('add-category')->with('message','category save successfully');
    }

    public function managecategory()
    {
    	return view('admin.pages.manage_category',[

            'categories' => category::all()
        ]);
    }

    public function editcategory($id)
    {
        return view('admin.pages.edit_category',[

            'category'=>category::find($id)

        ]);
    }

    public function updatecategory(Request $request)
    {
        category::updatecategoryinfo($request);
        return redirect('manage-category')->with('message','category update successfully');
    }

    public function deltecategory($id)
    {
        category::deletecategoryinfo($id);
        return redirect('manage-category')->with('message','category delete successfully');

    }
}
