<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <th>
        <tr>id</tr>
        <tr>name</tr>
    </th>

    @foreach ($list as $lists)
    <th>
        <td>{{$lists->id}}</td>
        <td>{{$lists->name}}</td>
    </th>
    @endforeach
</table>

</body>
</html>
