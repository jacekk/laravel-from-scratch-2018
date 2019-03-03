<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home') | Laravel From Scratch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
</head>
<body>
    <nav class="navbar is-light">
        <div class="container">
            <div class="navbar-menu">
                <a class="navbar-item" href="/">Home</a>
                <a class="navbar-item" href="/about">About us</a>
                <a class="navbar-item" href="/projects">Projects</a>
                <a class="navbar-item" href="/contact">Contact us</a>
            </ul>
        </div>
    </nav>
    <div class="section">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
