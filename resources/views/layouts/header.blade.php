<html>
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <title>

    </title>
</head>
<body>
<div class="content">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LaravelTodoList</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add_user')}}">Add new Task</a>
                </li>
            </ul>
            <span class="navbar-text">

    </span>
        </div>
    </nav>
    @yield('content')
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
</body>
</html>