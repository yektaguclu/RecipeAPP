<?php
    //connection params
    include_once("./mysql.php");

    // Create connection
    $conn = new mysqli($host, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: Baguette;
            src: url("./fonts/Baguette.ttf");
        } 

        .baguette {
            font-size: 70px;
            font-family: Baguette;
            font-weight: 100;
        }
    </style>
</head>

<body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-size: 20px" href="./index.php">Recipe APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Get Started
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./findARecipe.php">Find a Recipe</a></li>
                <li><a class="dropdown-item" href="./buildARecipe.php">Create a Recipe</a></li>
                <li><a class="dropdown-item" href="./aboutUs.php">Our Team</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="col-md-12" style="height: 100vh;overflow: auto; background-image: url('./images/prettyNiceSpoons.jpg'); background-size:cover; background-repeat:no-repeat;min-height:contain">
        <div class="px-0 text-center">
        <h1 class="display-4 fst-italic text-white baguette" style="text-align: center;">Recipe APP</h1>
        <p class="lead my-3 text-white" style="text-align:center;font-family:Georgia, 'Times New Roman', Times, serif;">Welcome to Recipe App! This app was designed to make storing, creating, and reviewing your favorite recipes a breeze!</p>
        <div style="padding-top:1%;"></div>
        <button class="btn btn-primary" onclick="window.location.href='./signUp.php'" style="text-align:center;position: absolute;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">Sign Up!</button>
        </div>
    </div>

    <!-- Bootstrap JS CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>