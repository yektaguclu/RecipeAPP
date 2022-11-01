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

        @font-face{
            font-family: Dancing;
            src: url("./fonts./DancingScript-Bold.ttf");
        }

        .baguette {
            font-size: 70px;
            font-family: Baguette;
            font-weight: 100;
        }

        .dancing{
            font-size: 50px;
            font-family: Dancing;
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
    <div style="padding:5%;background-image:url('./images/vegiesBG.jpg');background-size:cover;"></div>
    <h1 class="display-4 fst-italic text-black baguette" style="text-align: center;padding-top:1%;">Recipe APP</h1>

    <?php
        //connection params
        include_once("./mysql.php");

        // Create connection
        $conn = new mysqli($host, $username, $password, $database, $port);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
// SELECT name,skillLevel,prepTime,cookTime,servingQuantity,instructions,ingredients,AVG(rating) FROM recipes JOIN reviews ON recipes.recipeId=reviews.recipeId WHERE recipes.recipeID=1 GROUP BY recipes.recipeId;
        $sql = "SELECT name,skillLevel,prepTime,cookTime,servingQuantity,instructions,ingredients,AVG(rating) AS aveRating FROM recipes LEFT JOIN reviews ON recipes.recipeId=reviews.recipeId WHERE recipes.recipeID=$_GET[id] GROUP BY recipes.recipeId;";

        $result = $conn->query($sql);

        $rows = mysqli_fetch_array($result)
        
    ?>

    <h2 class="display-4 fst-italic text-black dancing" style="text-align: center;padding-top:2%;">Recipe: 
    <?php   
        echo $rows['name']?>
    </h2>

    <p class="display-4 fst-italic text-black dancing" style="text-align: center;padding-top:2%; font-size:30px;">
    <?php
        if(empty($rows['aveRating'])){
            echo 'Unrated';
        }else{
            echo "Average Rating: " . $rows['aveRating'];
        } 
    ?>
    </p>

    <div style="padding:1%;"></div>
    <div class='container shadow col-6 border rounded' style="background-color:#D8D8D8;">
        <h2 class="display-8 fst-italic text-black dancing">Recipe Info</h2>
        <p class="fst-italic text-black">
            Skill Level: 
            <?php echo $rows['skillLevel']?>
        </p>

        <p class="fst-italic text-black">
            Prep Time: 
            <?php echo $rows['prepTime']?>
        </p>

        <p class="fst-italic text-black">
            Cook Time: 
            <?php echo $rows['cookTime']?>
        </p>

        <p class="fst-italic text-black">
            Serving Size: 
            <?php echo $rows['servingQuantity']?>
        </p>
    </div>
    
    <div style="padding:1%;"></div>

    <div class="container shadow col-6 border rounded " style="background-color:#D8D8D8;">
        <h2 class="display-8 fst-italic text-black dancing">Ingredients</h2>
        <p class="fst-italic text-black">
            <?php echo nl2br($rows['ingredients']);?>
        </p>
    </div>

    <div style="padding:1%;"></div>

    <div class="container shadow col-6 border rounded" style="background-color:#D8D8D8;">
        <h2 class="display-8 fst-italic text-black dancing">Instructions</h2>
        <p class="fst-italic text-black">
            <?php echo nl2br($rows['instructions']);?>
        </p>
    </div>

    <div style="padding:1%;"></div>

<!-- user review table connection -->
<?php
    $sql2 = 'SELECT userName, rating, content FROM reviews JOIN users ON reviews.userId=users.userID WHERE recipeId = ' . $_GET['id'] . ';' ;

    $result2 = $conn->query($sql2);

?>
<div class="container shadow col-6 border rounded" style="background-color:#D8D8D8;">
    <h2 class="display-8 fst-italic text-black dancing">User reviews</h2>

<!-- Review table -->
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col">User</th>
            <th scope="col">Rating</th>
            <th scope="col">Review</th>
        </tr>
    </thead>
<!-- print out each review -->
<tbody>
<?php
    while($rows2 = mysqli_fetch_array($result2)){
        echo "<tr>".
            "<td>". $rows2['userName'] . "</td>" .
            "<td>". $rows2["rating"] . "</td>".
            "<td>". $rows2["content"]."</td>"
        ."</tr>";
    }

?>
</tbody>
</table>
</div>

<div style="padding:2%;"></div>

<div class="container">
    <button class="btn btn-primary" onclick="window.location.href='./writeReview.php?id=<?php echo $_GET['id']?>'" style="text-align:center;position: absolute;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">Write a Review!</button>
</div>

    <div style="padding:2%;"></div>
    <div style="padding:2%;background-image:url('./images/vegiesBG.jpg');background-size:cover;"></div>
    <!-- Bootstrap JS CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>