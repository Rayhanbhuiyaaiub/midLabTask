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
    <form action="" method="post"></form>
    @csrf

        <label for="">Full Name:</label>
        <input type="text" name="fullName" id="">
        <br>
        <label for="">User Name:</label>
        <input type="text" name="userName" id="">
        <br>
        <label for="">Email:</label>
        <input type="email" name="email" id="">
        <br>
        <label for="">Password:</label>
        <input type="password" name="password" id="">
        <br>
        <label for="">Confirm Password:</label>
        <input type="Password" name="confirmPassword" id="">
        <br>
        <label for="">Address:</label>
        <input type="text" name="address" id="">
        <br>
        <label for="">Company Name:</label>
        <input type="text" name="companyName" id="">
        <br>
        <br>
        <label for="">Phone:</label>
        <input type="phone" name="phone" id="">
        <br>
        <br>
        <label for="">City:</label>
        <input type="text" name="city" id="">
        <br>
        <br>
        <label for="">Country:</label>
        <input type="text" name="country" id="">
        <button type="submit"></button>
        
</body>
</html>