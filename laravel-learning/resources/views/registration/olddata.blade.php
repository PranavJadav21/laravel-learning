<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    <h1>Form with old Data</h1>
    <form action="" method="POST">
        @csrf
        Name:<input type="text" name="name1" id="name" value="{{old('name1')}}"><br><br>
        Email:<input type="email" name="email" id="email" value="{{old('email')}}"><br><br>
        Password:<input type="password" name="password" id="password" value="{{old('password')}}"><br><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>