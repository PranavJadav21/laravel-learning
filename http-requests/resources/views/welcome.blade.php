<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Posts</h1>
    @foreach ($data as $item)
        <h2>{{$item['title']}}</h2>
        <p>{{$item['body']}} </p>
    @endforeach
</body>
</html>