<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\brand;
use App\product;
use DB;


class ProductController extends Controller
{
    public function addproduct()
    {
    	return view('admin.pages.add_product',[
    		'categories' => category::where('publication_status',1)->get(),
    		'brands' =>brand::where('publication_status',1)->get()
    	]);
    }

    public function saveproduct(Request $request)
    {
    	 product::saveproductinfo($request);
        return redirect('add-product')->with('message','product saved successfully!!');
    }

    public function manageproduct()
    {	$product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            
            ->select('products.*', 'categories.category_name','brands.brand_name')
            ->orderBy('id','desc')
            ->get();
    	return view('admin.pages.manage_product',[
    		'product' => $product
    	]);
    }

    public function deleteproduct($id)
    {
    	$product =product::find($id);
    	unlink($product->product_image);
    	$product->delete();
    	return redirect('manage-product')->with('message','product saved successfully!!');
    }

    public function editproduct($id)
    {
        return view('admin.pages.edit_product',[
            'categories' => category::where('publication_status',1)->get(),
            'brands' =>brand::where('publication_status',1)->get(),
            'product'=>product::find($id)
        ]);
    }

    public function updateproduct(Request $request)
    {
       product::updateproductinfo($request);
       return redirect('manage-product')->with('message','product saved successfully!!');
    }
}
