<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home') | Laravel From Scratch</title>
</head>
<body>
    <h2>Menu:</h2>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About us</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/contact">Contact us</a></li>
    </ul>
    @yield('content')
</body>
</html>
