<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Input;


class TasksController extends Controller
{
    //
    public function home(){
    	return "Hello World!";
    }

    public function store()
    {
    	$task = new Task;
    	$task->title = Input::get('title');
    	$task->description = Input::get('description');
    	$task->save();

    	return redirect('tasks');

    }

}