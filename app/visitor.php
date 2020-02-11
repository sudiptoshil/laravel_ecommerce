<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class visitor extends Model
{
    protected $fillable = ["name ","email","password","phone","address"];

    public static function newsignupinfo($request)
    {
    	$visitor = new visitor();
    	$visitor->name     = $request->name;
    	$visitor->email    = $request->email;
    	$visitor->password = bcrypt($request->password);
    	$visitor->phone    = $request->phone;
    	$visitor->address  = $request->address;
    	$visitor->save();

    	Session::put("visitor_id",$visitor->id);
    	Session::put("visitor_name",$visitor->name);
    }
}
