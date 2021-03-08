<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>registration</title>
</head>
<body>
    <h1>Registration Page</h1>
    <p>{{session("msg")}}</p>
    <form action="" method="post">
    @csrf

        <label for="">First Name:</label>
        <input type="text" name="firstName" id="" value="{{old('firstName')}}">
        <br>
        <label for="">Last Name:</label>
        <input type="text" name="lastName" id=""value="{{old('lastName')}}">
        <br>
        <label for="">User Name:</label>
        <input type="text" name="userName" id=""value="{{old('userName')}}">
        <br>
        <label for="">Email:</label>
        <input type="email" name="email" id=""value="{{old('email')}}">
        <br>
        <label for="">Password:</label>
        <input type="password" name="password" id="">
        <br>
        <label for="">Confirm Password:</label>
        <input type="Password" name="password_confirmation" id="">
        <br>
        <label for="">Address:</label>
        <input type="text" name="address" id=""value="{{old('address')}}">
        <br>
        <label for="">Company Name:</label>
        <input type="text" name="companyName" id=""value="{{old('companyName')}}">
        <br>
        <br>
        <label for="">Phone:</label>
        <input type="phone" name="phone" id=""value="{{old('phone')}}">
        <br>
        <br>
        <label for="">City:</label>
        <input type="text" name="city" id=""value="{{old('city')}}">
        <br>
        <br>
        <label for="">Country:</label>
        <input type="text" name="country" id=""value="{{old('country')}}">
        <br>
        <p style="color:red">{{session("msg")}}</p>
        @foreach ($errors->all() as $err)
        <p style="color:red">{{$err}}</p>
        @endforeach
        <button type="submit">Register</button>
        
    </form>    
</body>
</html>