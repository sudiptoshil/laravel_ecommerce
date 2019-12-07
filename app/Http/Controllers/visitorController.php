<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\brand;
use App\visitor;
use Session;

class visitorController extends Controller
{
    public function index()
    {
    	 return view("frontend.pages.login_signup",[
         'categories' => category::where('publication_status',1)->get(),
         'brands' =>   brand::where('publication_status',1)->get()
          ]);
    }

    public function newsignup(Request $request)
    {	
    	visitor::newsignupinfo($request);

    	return redirect("/");

    }

    public function newlogin(Request $request)
    { 
    	   $visitor =visitor::where("email",$request->email)->first();
    	   if($visitor){
    		if (password_verify($request->password, $visitor->password)) {
		    // echo 'Password is valid!';
    			Session::put("visitor_id",$visitor->id);
    	        Session::put("visitor_name",$visitor->name);
    			return redirect('/');
		    }
		    else 
		    {
		    return redirect('/login-signup')->with("message","password not valid!!");
		     }
		      
          }
          else 
		      {
		      return redirect('/login-signup')->with("message","email not valid!!");
		      }
      }


      public function visitorlogout(Request $request)
      {
      	Session::forget('visitor_id'); 
      	Session::forget('visitor_name');
      	return redirect('/');

      }
    }
