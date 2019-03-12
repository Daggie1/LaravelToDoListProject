<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
public function add(){
    return view('tasks.add');
}
public function insert(Request $request){
    $userid=Auth::id();
    $this->validate(
        $request,[
            'title'=>'required',
            'description'=>'required',
            'deadline'=> 'required']
    );
    $request['author']=$userid;
    $task_data=$request->all();
    Task::create($task_data);
    return redirect(route('home'));
}
}
