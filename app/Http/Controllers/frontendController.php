<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\brand;
use App\product;
use Session;

class frontendController extends Controller
{
   public function index()
   {  
   	
   	return view('frontend.pages.homecontent',[
   		'categories' => category::where('publication_status',1)->get(),
   		 'brands' =>   brand::where('publication_status',1)->get(),
   		'products' =>  product::where('publication_status',1)->orderby('id')->take('6')->get()
   	]);
   }


   public function categoryproduct($id)
   {
   	return view('frontend.pages.category_product',[
   		'categories' =>category::where('publication_status',1)->get(),
   		'brands' =>   brand::where('publication_status',1)->get(),
   		'products' =>product::where('category_id',$id)->where('publication_status',1)->get()
   	]);
   }

    public function brandproduct($id)
    {
   	return view('frontend.pages.brand_product',[
   		'categories' =>category::where('publication_status',1)->get(),
   		'brands' =>   brand::where('publication_status',1)->get(),
   		'products' =>product::where('brand_id',$id)->where('publication_status',1)->get()
   	]);
    }
}
