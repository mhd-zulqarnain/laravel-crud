<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customer order</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/app.css') ?>" type="text/css">
</head>
<body>
<div class="container  mt-4">
    <h3 class="mt-4">My todo list</h3>

    <div class="col-md-10 col-sm-10">
        <form class="form form-horizontal" role="form">
            <div class="form-group col-md-6 row ">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="search" placeholder="Search">
                </div>
            </div>
        </form>
            <a href="new" class="btn btn-block col-md-2" type="submit" > new </a>
    </div>

    <div class="col-md-10 row">
        @foreach($tasks as $task)
        <div class="card col-4 ml-2 " >
            <div class="card-body">
                <h5 class="card-title">Card #{{$task->id}}</h5>
                <p class="card-text">{{$task->name}}</p>
                <a href="edit/{{$task->id}}" class="btn btn-outline-primary">Edit</a>
                <a href="remove/{{$task->id}}" class="btn  btn-outline-danger">Remove</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
