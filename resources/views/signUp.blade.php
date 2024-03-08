<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body> 
    <form method="POST" action="{{ url('createUser') }}">
        @csrf
        <div>
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" >
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" >
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" >
        </div>
        <div>
            <label for="confirm-pass">Confirm Password: </label>
            <input type="password" id="password" name="password" >
        </div>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>