<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;

class BrandController extends Controller
{
    public function addbrand()
    {
    	return view('admin.pages.add_brand');
    }

	public function savebrand(Request $request)
	{
		brand::savebrandinfo($request);
		return redirect('add-brand')->with('message','brand save successfully!!');
	}

	public function managebrand()
	{
		return view('admin.pages.manage_brand',[
			'brand' =>brand::all()


		]);
	}

	public function editbrand($id)
	{
		return view('admin.pages.edit_brand',[

			'brand' =>brand::find($id)
		]);

	}

	public function updatebrand(Request $request)
	{
		brand::brandupdateinfo($request);
		return redirect('manage-brand')->with('message','brand updated successfully!!');
	}

	public function deletebrand($id)
	{
		$brand =brand::find($id);
		$brand->delete();
		return redirect('manage-brand')->with('message','brand deleted successfully!!');
	}
    
}
