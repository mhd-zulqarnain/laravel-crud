<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customer order</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo asset('css/app.css') ?>" type="text/css">
</head>
<body>

<div class="container  mt-4">

    <h3 class="mt-4">New to do list </h3>

<div class="row col-md-10">
        <form action="{{ isset($task->id) ? 'update_item' : 'add_new_item'}} " method="post" class="form form-horizontal" role="form">
        <div class="form-group col-md-8 row ">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{ isset($task->id) ? $task->id : ''}}">
                <input type="text"      value="{{ isset($task->name) ? $task->name : ''}}" class="form-control" id="task" name="task" placeholder="New task">
            </div>
        </div>
        <button type="submit" class="btn btn-block col-md-4">
            {{ isset($task->name) ? 'Update' : 'Add'}}
        </button>
    </form>
</div>

</div>

<div class="modal fade" id="frmLogin" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="btn" data-dismiss="modal">×</a>
                <h3 id="modalTitle">Login</h3>
            </div>
        </div>
    </div>
</div>

</body>
</html>
