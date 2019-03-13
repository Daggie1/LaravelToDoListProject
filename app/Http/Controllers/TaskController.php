<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
<<<<<<< HEAD
    public function get_add_task_form(){
        return view('task.add_task_form');
}
    public function edit($id){
        $task= Task::find($id);
        return view('tasks.edit_form',['task'=>$task]);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'deadline'=>'required',
            'description'=>'required' ]);
        $task = Post::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->save();
        return redirect()->route('home')->with('success', 'task has been updated successfully!');
    }
    public function deleteTask($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('home')->with('success', 'task has been deleted successfully!');
    }
=======
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
>>>>>>> 15df1b252e750635d638ad33723f74795a5b196b
}
