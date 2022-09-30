<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<table class="table table-bordered">
    <tr>

        <th>Title</th>
        <th>body</th>
        <th>Date</th>

    </tr>
    <tr>
        <td>{{$articles['title']}}</td>
        <td>{{$articles['body']}}</td>
        <td>{{$articles['created_at']}}</td>
    </tr>
</table>

</body>
</html>
