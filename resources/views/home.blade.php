@extends('layouts.master')
@section('title')
@endsection
@section('content')
@include('patriats.nav')
    @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
    @endif
    @if(count($tasks)>0)
<h4>Yet To Be Completed</h4>
        @foreach($tasks as $task)
            @if($task->status==0)

            <article class="media content-section">
                <img class="rounded-circle article-img" src="" alt=""/>
                <div class="media-body">
                    <div class="article-metadata">
                        <a class="mr-2" href="">{{$task->user->name}}</a>
                        <small class="text-muted">{{ $task->created_at }}</small>
                        <a href="{{route('edit_task',$task->id)}}" class="btn btn-outline-primary">Update</a>
                        <a href="{{route('check_off_task',$task->id)}}" class="btn btn-outline-success">Check Off</a>
                        <a href="{{route('delete_task',$task->id)}}" class="btn btn-danger">Delete</a>
                    </div>
                    <h2><a class="article-title" href="">{{$task->title}}</a></h2>
                    <p class="article-content">{{ $task->description}}</p>
                </div>
            </article>
            @endif
        @endforeach
<h4>Tasks Already Checked Off</h4>
@foreach($tasks as $task)
    @if($task->status==1)

        <article class="media content-section">
            <img class="rounded-circle article-img" src="" alt=""/>
            <div class="media-body">
                <div class="article-metadata">
                    <a class="mr-2" href="">{{$task->user->name}}</a>
                    <small class="text-muted">{{ $task->created_at }}</small>
                    <a href="{{route('edit_task',$task->id)}}" class="btn btn-outline-primary">Update</a>
                    <a href="{{route('check_off_task',$task->id)}}" class="btn btn-outline-success">Check Off</a>
                    <a href="{{route('delete_task',$task->id)}}" class="btn btn-danger">Delete</a>
                </div>
                <h2><a class="article-title" href="">{{$task->title}}</a></h2>
                <p class="article-content">{{ $task->description}}</p>
            </div>
        </article>
    @endif
@endforeach
    @endif
@endsection


