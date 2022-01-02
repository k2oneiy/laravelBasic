

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h3>Update </h3>
    <form action="{{url('update/'.$user->id)}}" method="post">
        @csrf
        <label for="">name</label><br>
        <input type="text" name="name" value="{{$user->name}}"><br>
        <label for="">email</label><br>
        <input type="text" name="email" value="{{$user->email}}"><br>
        <label for="">password</label><br>
        <input type="text" name="password" value="{{$user->password}}"><br><br>
        <input type="submit" value="update">
    </form>
</body>
</html>
