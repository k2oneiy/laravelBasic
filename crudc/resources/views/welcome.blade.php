

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Students List</h1>



    <table>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>password</th>
        </tr>
        @foreach ($list as $lists)
        <tr>
        <td>{{$lists->id}}</td>
        <td>{{$lists->username}}</td>
        <td>{{$lists->password}}</td>
        <td><a href="update/{{$lists->id}}">Edit</a></td>
        <td><a href="delete/{{$lists->id}}">Delete</a></td>
        </tr>
        @endforeach
      </table>
      <a href="/deleteall">Delete all</a>
</body>
</html>
