<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
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
}
