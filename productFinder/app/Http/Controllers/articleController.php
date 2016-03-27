<?php

namespace App\Http\Controllers;

use App\article;

use Illuminate\Http\Request;

use App\Http\Requests;


class articleController extends Controller
{
    public function index(){
    	
    	$articles = article::latest('published_at')->get();

    	return view('article.index',compact('articles'));

    	//return $articles;
    }

    public function show($id){

    	$article = article::find($id);

    	return view('article.show',compact('article'));

    
    }

    public function create(){

    	return view('article.create');
    	
    }

    public function store(Request $request){

    	$input = $request->all();

    	$input['published_at'] = \Carbon\Carbon::now();

    	article::create($input);

    	return redirect('article');

    }
}
