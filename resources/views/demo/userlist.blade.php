<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>用户信息</h1>
    <table>
        网名：<input type="text" value="{{$user_name->username}}"><br>
        账号：<input type="text" value="{{$user_name->user_name}}">
    </table>
</body>
</html>