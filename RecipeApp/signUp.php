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
<nav class="navbar navbar-dark bg-dark fixed-top">
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

<div style="padding:5%;background-image:url('./images/tomatoes.jpg');background-size:cover;"></div>

<h1 class="display-4 fst-italic text-black baguette" style="text-align: center;padding-top:2%;">Recipe APP</h1>

<div class="container">
        <form method="post" action=<?php echo '"'. "./phpFunctions/updateUsersTable.php" . '"';?>>
        <div class="form-group">
            <!-- User ID (to be replaced with secure login system if we have time)-->
            <label for="username">Username: </label>
            <input type="text" id="username" class="form-control"  placeholder="Write your username" name="username">
        </div>

        <div class="form-group">
            <!-- User ID (to be replaced with secure login system if we have time)-->
            <label for="password">password: </label>
            <input type="password" id="password" class="form-control"  placeholder="Write your password" name="password">
        </div>
        
        <div class="form-group">
            <!-- Instructions -->
            <label for="email"> email: </label>
            <input type="email" class="form-control" id="email" placeholder="Write your email" rows="10" name="email"></input>
        </div>


        <div style="padding-top:1%;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>

<div style="padding:2%;"></div>
<div style="padding:11%;background-image:url('./images/vegiesBG.jpg');background-size:cover;"></div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>