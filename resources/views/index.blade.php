<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>
<td><a href="/articles/create">Add</a></td>

<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">body</th>
        <th scope="col">Date</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>

    @foreach($articles as $article)

    <tr>
        <th scope="row">{{$article['title']}}</th>
        <td>{{$article['body']}}</td>
        <td>{{$article['created_at']}}</td>
        <td><a href="/article/{{$article->id}}">show</a></td>
        <td><a href="/articles/{{$article->id}}/edit">Edit</a></td>
        <td><form method="POST" action="/article/{{$article->id}}">
                @method('DELETE')
                @csrf
                <input type="submit" value="delete">

            </form></td>

    </tr>
    @endforeach
    <tbody>
</table>

</body>
</html>
