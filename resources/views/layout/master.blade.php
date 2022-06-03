<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/laptop.png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <a @yield('home') href="/home"> <i class="fas fa-home"></i> <span>home</span> </a>
        <a @yield('about') href="/about"> <i class="fas fa-user"></i> <span>about</span> </a>
        <a @yield('portfolio') href="/portfolio"> <i class="fas fa-briefcase"></i> <span>portfolio</span> </a>
        <a @yield('contact') href="/contact"> <i class="fas fa-address-book"></i> <span>contact</span> </a>
    </nav>
    @yield('content')
</body>
</html>
