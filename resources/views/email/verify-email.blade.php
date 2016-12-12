<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h4> Welcome, {{$user->name}}</h4>

<p>Thank you for registering with TaskManager. Kindly click on the link below to activate your account</p>

<a href="{{env('APP_URL')}}:8000/auth/register/{{$user->verify_token}}">Click here</a>
</body>
</html>