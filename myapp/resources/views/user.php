<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h4><?=$title?></h4>
    <form  method="post" action="<?=url('/get-data');?>">

    <?= session('message'); ?>
    <br>
        <label for="">name</label><br>
        <input type="text" name="name"><br>
        <label for="">email</label><br>
        <input type="text" name="email"><br>
        <label for="">password</label><br>
        <input type="password" name="password"><br><br>
        <input type="hidden" name="_token" value="<?=csrf_token();?>">
        <input type="submit" value="login" name="login">
    </form>
    
</body>
</html>