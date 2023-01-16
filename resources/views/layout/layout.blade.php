<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeakBook</title>
    <link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
</head>
<body>


    <nav class="navbar">
        <div class="content">
            <div class="logo"><a href="#">Wikrama</a></div>
            <ul class="menu-list">
                <li><a href="#">Home</a></li>
                <li><a href="#" class="login">Login</a></li>
            </ul>
        </div>
    </nav>



@yield('content')


<script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");

    window.onscroll = ()=>{
        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
</script>


</body>
</html>
