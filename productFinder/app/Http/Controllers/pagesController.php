<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    public function about()
    {
    	$name = [
    		'first' => 'Ares',
    		'last'	=> '<span style="color:red;">Yang</span>'
    	];
    	return view('pages.about',$name);
    }
}
