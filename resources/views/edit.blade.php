<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<form action="/articles/{{$articles->id}}" method="post">
    @method('PUT')
    @csrf

    <div class="container">
        <label for="title"><b>title</b></label>
        <input type="text" placeholder="Enter title" name="title" required value="{{$articles->title}}">

        <br>

        <label for="body"><b>body</b></label>
        <input type="text" placeholder="Enter body" name="body" required value="{{$articles->body}}">

        <br>

        <button type="submit" class="btn btn-primary">Update</button>
    </div>


</form>
</body>
</html>
