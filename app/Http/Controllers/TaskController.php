<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_add_task_form(){
        return view('tasks.add');
}


public function edit($id){
        $task= Task::find($id);
        return view('tasks.edit',['task'=>$task]);
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'deadline'=>'required',
            'description'=>'required' ]);
        $task = Task::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->save();
        return redirect()->route('home')->with('success', 'task has been updated successfully!');
    }
    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('home')->with('success', 'task has been deleted successfully!');
    }

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
    $request['author_id']=$userid;
    $task_data=$request->all();
    Task::create($task_data);

    # find who you are sending email to.
    $email_to = User::where('id', $userid)->pluck('email')->first();


    $data = ['task' =>  $task_data];

    Mail::send('task_mails/todo_email', $data, function ($message) use ($email_to){
        $message->to($email_to);
        $message->from('johnpaulmwangin@gmail.com', 'Paul Group');
        $message->subject('Welcome Here');
    });
    return redirect(route('home'));
}
    public function check_off($id){
        $task=Task::find($id);
        $task->status = 1;
        $task->save();
        return redirect()->route('home')->with('success', 'task has been checked off successfully!');
    }
}
