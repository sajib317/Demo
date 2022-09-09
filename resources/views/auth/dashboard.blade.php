<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Dashboard</h2>
        <h4>Your Name: {{ Session::get('username') }}</h3>
            <h4>Your Role: {{ Session::get('userrole') }}</h3>
                <a class="btn btn-success" href="{{ url('users/all') }}">All Users</a>
                <a class="btn btn-primary" href="{{ url('users/pending') }}">Pending Users</a>
    </div>
</body>

</html>
