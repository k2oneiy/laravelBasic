<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/update/{{$student[0]->id}}" method="post">
        @csrf
        <p>name</p>
        <input type="text" name="name" value="{{$student[0]->username}}">
        <p>password</p>
        <input type="text" name="password" value="{{$student[0]->password}}">
        <input type="submit" value="update">
    </form>
</body>
</html>
