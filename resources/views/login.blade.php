<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    {{-- @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif --}}
    <form action="login" method="POST">
        @csrf
        <div>
            <label for="username">Email: </label>
            <input type="username" id="username" name="username" >
            <span style="color:red">@error('username') {{ $message }} @enderror</span>
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" >
            <span style="color:red">@error('password') {{ $message }} @enderror</span>
        </div>
    
        <button type="submit">Login</button>
    </form>
   
</body>
</html>
