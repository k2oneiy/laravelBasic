
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h3>Create User</h3>
    <form action="/store" method="post">
        @csrf
        <label for="">name</label><br>
        <input type="text" name="name"><br>
        <label for="">email</label><br>
        <input type="text" name="email"><br>
        <label for="">password</label><br>
        <input type="text" name="password"><br><br>
        <input type="submit" value="login">
    </form>
</body>
</html>
