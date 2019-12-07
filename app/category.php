<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['category_name', 'publication_status'];


    public static function savecategoryinfo($request)
    {
    	$category = new category();
    	$category->category_name      = $request->category_name;
    	$category->publication_status = $request->publication_status;
    	$category->save();
    }


    public static function updatecategoryinfo($request)
    {
    	$category =category::find($request->id);
        $category->category_name      = $request->category_name;
        $category->publication_status = $request->publication_status;
        $category->save();
    }

    public static function deletecategoryinfo($id)
    {
    	$category =category::find($id);
        $category->delete();
    }
}
