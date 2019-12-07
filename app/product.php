<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['product_name','category_id','brand_id','product_short_description','product_long_description','product_image','publication_status'];

    public static function saveproductinfo($request)
    {
    	// return $request->all();
    	$image =$request->file('product_image');
        $imageName =$image->getClientOriginalName();
        $directory ='product_image/';
        $image->move($directory,$imageName);
        $product = new product();
        $product->category_id =$request->category_id;
        $product->brand_id =$request->brand_id;
        $product->product_name =$request->product_name;
        $product->product_short_description =$request->product_short_description;
        $product->product_long_description =$request->product_long_description;
        $product->product_image = $directory.$imageName;
        $product->publication_status =$request->publication_status;
        $product->save();
    }

    public static function updateproductinfo($request)
    {
    	 // return $request->all();
        $productImage =$request->file('product_image');
        if ($productImage) 
        {
            $product = product::find($request->id);
            unlink($product->product_image);
            $imageName =$productImage->getClientOriginalName();
            $directory ='product_image/';
            $productImage->move($directory,$imageName);

            $product->category_id =$request->category_id;
            $product->brand_id =$request->brand_id;
            $product->product_name =$request->product_name;
            $product->product_short_description =$request->product_short_description;
            $product->product_long_description =$request->product_long_description;
            $product->product_image = $directory.$imageName;
            $product->publication_status =$request->publication_status;
            $product->save();
        

        } else
        {    
            $product = product::find($request->id);
            $product->category_id =$request->category_id;
            $product->brand_id =$request->brand_id;
            $product->product_name =$request->product_name;
            $product->product_short_description =$request->product_short_description;
            $product->product_long_description =$request->product_long_description;
            $product->publication_status =$request->publication_status;
            $product->save();

            
        }
    }
    
}
