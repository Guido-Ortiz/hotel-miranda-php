<!DOCTYPE html>
<html lang="en">

<head>
    @section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <!-- menu  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- search -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- team -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- close -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- swiper -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Hotel Miranda</title>
    @show
</head>




<body>
    @section('navbar')
    <nav>
        <span class="material-symbols-outlined menu" id="menu">menu</span>
        <span class="material-symbols-outlined close menu" id="close">close</span>
        <div class="navbar--container">
            <a class="navbar--header" href="index.html">
                <div class="logo">
                    <img src="./resources/H.png" alt="Logo Hotel Miranda" />
                </div>
                <img src="./resources/Hotel Miranda.png" alt="Hotel Miranda" class="navbar--title" />
            </a>

            <a href="about.html">
                <h3 class="menu--desktop">About us</h3>
            </a>
            <a href="rooms.html">
                <h3 class="menu--desktop">Rooms</h3>
            </a>
            <a href="offers.html">
                <h3 class="menu--desktop">Offers</h3>
            </a>
            <a href="contact.html">
                <h3 class="menu--desktop">Contact</h3>
            </a>


            <div class="navbar--icons">
                <span class="material-symbols-outlined group">group</span>
                <span class="material-symbols-outlined">search</span>
            </div>
        </div>
    </nav>
    <div class="menu--mobile" id="menu--items">
        <ul>
            <li>
                <a href="about.html">
                    <h3 class="menu--item">About us</h3>
                </a>
            </li>
            <li>
                <a href="rooms.html">
                    <h3 class="menu--item">Rooms</h3>
                </a>
            </li>
            <li>
                <a href="offers.html">
                    <h3 class="menu--item">Offers</h3>
                </a>
            </li>
            <li>
                <a href="contact.html">
                    <h3 class="menu--item">Contact</h3>
                </a>
            </li>
        </ul>
    </div>
    @show