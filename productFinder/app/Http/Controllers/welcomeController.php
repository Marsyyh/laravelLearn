<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class welcomeController extends Controller {
	// public function __construct(){
	// 	$this->middleware('guest');
	// }

	public function test()
	{
		return view('welcome');
	}

	public function contact(){
		return view('pages.contact');
	}
}