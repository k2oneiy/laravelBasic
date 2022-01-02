<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
</head>

<style>
    table,th,tr,td{
        border: 1px solid black;
        padding: 10px;

    }
</style>
<body>

    <table>
        <th>name</th>
        <th>email</th>
        <th>password</th>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td><a href="update/{{$user->id}}">Update</a></td>
                <td><a href="delete/{{$user->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>



    </table>


</body>
</html>
