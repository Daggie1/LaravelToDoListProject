@extends('layouts.master')
@section('title')
@endsection
@section('content')
    @include('patriats.nav')

    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Update Task
            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form" action="{{route('update_task',$task->id)}}" method="post">
                    {{ csrf_field() }}
                    <div style="margin-bottom: 25px" class="form-group">
                        <label class="form-check-label">Title</label>

                        <input id="title" type="text" class="form-control" name="title" value="{{$task->title}}" placeholder="e.g playing chess">
                    </div>

                    <div style="margin-bottom: 25px" class="form-group">
                        <label class="form-check-label">Description</label>

                        <textarea id="description"  class="form-control" name="description"  placeholder="e.g will be playing chess at muva">{{$task->description}}</textarea>
                    </div>






                    <div style="margin-bottom: 25px" class="form-group">
                        <label class="form-check-label">Deadline</label>

                        <input id="deadline"  type="date" class="form-control" name="deadline" value="{{$task->deadline}}" placeholder="e.g will be playing chess at muva"/>
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <input type="submit" id="btn-login" href="#" class="btn btn-success" value="Update"/>


                        </div>
                    </div>





                </form>
            </div>
        </div>


</div>

    </div>
@endsection
