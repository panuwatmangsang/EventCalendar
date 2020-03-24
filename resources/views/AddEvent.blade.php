<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Add Events</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #2e6da4; color: white;">
                        Add Event To Container
                    </div>

                    <div class="panel-body">
                        <h1> Task: Add Data </h1>
                        <form method="POST" action="{{ action('EventController@store') }}">

                            {{ csrf_field() }}
                            <label for="">Enter Name of Event</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the Name" /><br /><br />

                            <label for="">Enter Color</label>
                            <input type="color" class="form-control" name="color" placeholder="Enter the Color" /><br /><br />

                            <label for="">Enter Start DATE of Event</label>
                            <input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="Enter Start date" /><br /><br />

                            <label for="">Enter End DATE of Event</label>
                            <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="Enter End date" /><br /><br /> 

                            <input type="submit" name="submit" class="btn btn-primary" value="Insert Data" />
                            <a href="/events" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>