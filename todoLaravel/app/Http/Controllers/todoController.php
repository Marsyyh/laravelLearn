<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Validator;

class todoController extends Controller
{
    
    public function __construct(){
    	$this->middleware('auth');
    }


	public function home(){
		$tasks = Auth::user()->todos->toArray();
		return view('todo.home',compact('tasks'));

	}


	// public function update(){
	// 	return view('todo.update',compact('task'));
	// }


	public function postHandler(Request $request){
		switch ($request->action) {
			case 'Add':
				$rules = array(
					'date' => 'required',
					'description' => 'required',
				);

				$validator = Validator::make($request->all(),$rules);

				if($validator->fails()){
					return redirect('todo/home')
						->withErrors($validator);
				}
				//dd($request->toArray());
				\App\todo::create([
					'user_id'=> Auth::id(),
					'description'=>$request->description,
					'date'=>$request->date,
					'status'=>'Not Started',
					]);
				return redirect('todo/home');
				break;
			
			case 'Edit':
				$task = \App\todo::find($request->taskId)->toArray();
				return view('todo.update',compact('task'));
				break;

			case 'Update':
				$task = [];
				switch ($request->status) {
					case '0':
						$task['status'] = 'Not Started';
						break;
					case '1':
						$task['status'] = 'Started';
						break;
					case '2':
						$task['status'] = 'Mid-Way';
						break;
					case '3':
						$task['status'] = 'Completed';
						break;
				}
				\App\todo::find($request->id)->update(['status'=>$task['status'],'description'=>$request->description]);
				return redirect('todo/home');
				break;

			case 'Delete':
				\App\todo::find($request->taskId)->delete();
				return redirect('todo/home');
				break;
		}
	}

}
