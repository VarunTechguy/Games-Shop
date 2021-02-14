<?php 
    session_start();
        include("../login/connection.php");
        include("../login/functions.php");
        $user_data = check_login($con);
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge"/>
    <link rel="stylesheet" href="./style.css"/>
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <h3 id="logo">Game Shop</h3>
            <ul class="nav-area" id="nav-area">
                <li><a href="index2.php">home</a></li>
                <li><a href="h2/HomePage.html">Browse Games</a></li>
                <li><a href="contactUs/index.php">Contact Us</a></li>
                
            </ul>
        </nav>
            <a class="btn-area" href="/webf/login/logout.php" >logout</a>
    </header>
    <section>
        <div class="hero">
            <img src="./cod.jpg" alt="neon2">
            <h1 class="headline">Dream Big</h1>
        </div>
    </section>

    <div class="slider"></div>

    
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" 
        integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" 
        crossorigin="anonymous"
    ></script>
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" 
        integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" 
        crossorigin="anonymous"
    ></script>
    <script src="app.js"></script>
        
</body>
</html>