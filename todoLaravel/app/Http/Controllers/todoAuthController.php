<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\loginRequest;

use Auth;

class todoAuthController extends Controller
{
    public function doLogin(loginRequest $request){
    	$userData = array(
    		'email' => $request->userName,
    		'password' => $request->password,
    	);
    	if(Auth::attempt($userData)){
    		return redirect('todo/home');
    	}else{
    		return redirect('/')
    			->withErrors('wrong password');
    	}
	}

	public function logout(){
		Auth::logout();
		return redirect('/');
	}

}
