<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class cartController extends Controller
{
    // public function add_to_cart(Request $request)
    // {
    	
    // 	$qty = $request->qty;
    // 	$product_id =$request->product_id;
    // 	$productinfo =DB::table('products')
    //             ->where('id', $product_id)
    //             ->first();

    // 		// echo "<pre>";
    // 		// print_r($productinfo);
    //     $data['qty']=$qty;
    //     $data['id']=$productinfo->id;
    //     $data['name']=$productinfo->product_name;
    //     $data['price']=$productinfo->product_price;
    //     $data['options']['image']=$productinfo->product_image;
        
    //     Cart::add($data);
    //     return redirect('show-cart');

    // }

    // public function show_cart()
    // {
    //     $all_published_category = DB::table("categories")
    //                             ->where('publication_status',1)
    //                             ->get();
    //     return view("frontend.pages.add_to_cart",[
    //         'all_published_category' => $all_published_category


    //     ]);
    // }
}
