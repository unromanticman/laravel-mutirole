<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use App\User;


class UserCheckController extends Controller
{
    function checkUser(){

    	if(Auth::check()){
            $name   = Auth::user()->name;
            $email  = Auth::user()->email;
            $role   = Auth::user()->role;

            return response()->json([
	                    'name' => $name,
	                    'email' => $email,
	                    'role' => $role

	        ]);	
    	}
    	else{
    		return "You are not login!";
    	}
    }

    function userLogin(Request $request){
    	
    	//account1 ?email=123&password=123
		//account2 ?email=456&password=456

    	// role 為 0
    	if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'),'role' => 0])) 
    	{
    		//getLogin name
    		$name = Auth::user()->name;

    		return 'role:0' . $name;
		}

	// role 為 1
	if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'),'role' => 1])) 
	{
		//getLogin name
    		$name = Auth::user()->name;
    		return 'role:1' . $name;
	}

    }

    function userRegister(Request $request){

    	//account1 ?name=test1&role=0&email=123&password=123
    	//account2 ?name=test2&role=1&email=456&password=456
    	
    	return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => Hash::make($request->input('password'))]);

    }

    function userLogout(){
	Auth::logout();
    	return 'user logout';
    }
}
