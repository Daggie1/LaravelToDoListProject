@extends('layouts.header')
@section('content')

    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Add New Task
            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form">

                    <div style="margin-bottom: 25px" class="form-group">
                        <label class="form-check-label">Title</label>

                        <input id="title" type="text" class="form-control" name="title" value="" placeholder="e.g playing chess">
                    </div>

                    <div style="margin-bottom: 25px" class="form-group">
                        <label class="form-check-label">Description</label>

                        <textarea id="description"  class="form-control" name="description" value="" placeholder="e.g will be playing chess at muva"></textarea>
                    </div>






                    <div style="margin-bottom: 25px" class="form-group">
                        <label class="form-check-label">Deadline</label>

                        <input id="deadline"  type="date" class="form-control" name="deadline" value="" placeholder="e.g will be playing chess at muva"/>
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <a type="submit" id="btn-login" href="#" class="btn btn-success">Add </a>


                        </div>
                    </div>





                </form>
            </div>
        </div>


</div>

    </div>
@endsection