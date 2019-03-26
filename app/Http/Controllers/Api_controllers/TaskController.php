<?php

namespace App\Http\Controllers\Api_controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\Task\TaskCollection;
use App\Http\Resources\Task\TaskResource;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    /**
     * TaskController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  TaskCollection::collection(Task::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $task=new Task;
        $task->title=$request->title;
        $task->description=$request->description_content;
        $task->deadline=$request->deadline_date;
        $task->author_id=$request->author_id;
        $task->save();
        return response(
            [
                'data'=>new TaskResource($task)
            ]
            ,Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {

        $task->title=$request->title;
        $task->description=$request->description_content;
        $task->deadline=$request->deadline_date;
        $task->author_id=$request->author_id;
        $task->update();
        return response(
            [
                'data'=>new TaskResource($task)
            ]
            ,Response::HTTP_CREATED
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response(
           null
            ,Response::HTTP_NO_CONTENT
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkoff(Request $request, Task $task)
    {


        $task->status=$request->status;
        $task->update();
        return response(
            [
                'data'=>new TaskResource($task)
            ]
            ,Response::HTTP_CREATED
        );
    }
}
