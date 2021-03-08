<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>LogIn Page</title>
</head>
<body>
    <h1>LogIn Page</h1>
    <form action="" method="post">
        @csrf
        <label for="">Email:</label>
        <input type="email" name="email" id="">
        <br>
        <label for="">Password:</label>
        <input type="password" name="password" id="">
        <br>
        <p style="color:red">{{session("msg")}}</p>
        @foreach ($errors->all() as $err)
        <p style="color:red">{{$err}}</p>
        @endforeach
        <button type="submit">LogIn</button>
    </form>
        <a href="registration">Registration</a>
    
</body>
</html>