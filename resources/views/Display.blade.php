<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Display Events</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead">
                    <tr class="warning">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Color</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Update/Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                @foreach($events as $event)
                <tbody>
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->color }}</td>
                        <td>{{ $event->start_date }}</td>
                        <td>{{ $event->end_date }}</td>

                        <th><a href="{{ action('EventController@edit',$event['id']) }}" class="btn btn-success">
                                Edit </a>
                        </th>

                        <th>
                            <form action="{{ action('EventController@destroy',$event['id']) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hiden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </th>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>