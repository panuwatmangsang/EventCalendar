<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Edit Form</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <form action="{{action('EventController@update',$id)}}" method="POST">
                {{ csrf_field() }}
                <div class="container">
                    <div class="jumbotron" style="margin-top: 2%;">
                        <h1>Update your Data</h1>
                        <hr>
                        <input type="hidden" name="_method" value="UPDATE">

                        <div class="form-group">
                            <label>Name of Event</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Name"
                                value="{{ $events->title }}">
                        </div>

                        <div class="form-group">
                            <label>Event Color</label>
                            <input type="color" class="form-control" name="color" placeholder="Enter color"
                                value="{{ $events->color }}">
                        </div>

                        <div class="form-group">
                            <label>Start Data of Event</label>
                            <input type="date" class="form-control" name="start_date" placeholder="Enter Start Date"
                                value="{{ $events->start_date }}">
                        </div>

                        <div class="form-group">
                            <label>End Data of Event</label>
                            <input type="date" class="form-control" name="end_date" placeholder="Enter End Date"
                                value="{{ $events->end_date }}">
                        </div>

                        {{ method_field('PUT') }}
                        <button type="submit" name="submit" class="btn btn-success">Update Data</button>
                        <a href="/events" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>