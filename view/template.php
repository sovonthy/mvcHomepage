<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- Menu -->
<div class="bg-info">
        <img src="view/project/image/logo.png" alt="" width="6%" style="margin-left: 30px">
    </div>
<nav>
  <div class="nav-wrapper blue">
    <a href="#!" class="brand-logo"><img src="" alt=""></a>
    <ul class="right hide-on-med-and-down ">
      <li><a href="">
          <h3>Home</h3>
        </a></li>
      <li><a href="">
          <h3>Clubs</h3>
        </a></li>
      <li><a href="view/project/about_us.php">
          <h3>About Us</h3>
        </a></li>
      <li><a href="view/project/contact_us.php">
          <h3>Contact Us</h3>
        </a></li>

    </ul>
  </div>
</nav>


<?php
   include "homepage.php";
?>



<!-- Overlay and Image -->


<style>
 

  .container {
    position: relative;
    width: 100%;

  }

  .image {
    display: block;
    width: 100%;
    height: auto;
  }

  .overlay {
    position: absolute;
    bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5);
    /* Black see-through */
    color: #f1f1f1;
    width: 100%;
    transition: .5s ease;
    opacity: 0;
    color: blue;
    font-size: 60px;
    padding: 308px;
    text-align: center;
  }

  .container:hover .overlay {
    opacity: 4;
  }

  body {
    background: black;
  }
</style>
</head>

<body class="body">


  <div class="container">
    <div class="div">
      <img src="view/project/image/foot.jpg" alt="Avatar" class="image" width="100%">
      <div class="overlay">Football Clubs</div>
    </div>

  </div>
  


