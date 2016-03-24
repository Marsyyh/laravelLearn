<?php 
namespace App\Http\Controllers;

class welcomeController extends Controller {
	public function __construct(){
		$this->middleware('guest');
	}

	public function test()
	{
		return view('welcome');
	}
}