<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $fillable=['brand_name','publication_status'];

    public static function savebrandinfo($request)
    {
    	$brand = new brand();
    	$brand->brand_name         = $request->brand_name;
    	$brand->publication_status = $request->publication_status;
    	$brand->save();
    }

    public static function brandupdateinfo($request)
    {
    	$brand =Brand::find($request->id);
		$brand->brand_name         = $request->brand_name;
		$brand->publication_status = $request->publication_status;
		$brand->save();
    }
}
