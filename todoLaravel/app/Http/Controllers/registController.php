<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\registarionRequest;

class registController extends Controller
{
    
	public function create(registarionRequest $request)
	{
		
		\App\user::create([
			'first_name'=>$request->first_name,
			'last_name'=>$request->last_name,
			'email'=>$request->email,
			'password'=>bcrypt($request->password),
			'enabled'=>1,
			'type'=>'USER',
		]);

		return redirect('/');
	}

}
