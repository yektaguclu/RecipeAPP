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

    <div style="padding:5%;background-image:url('./images/vegiesBG.jpg');background-size:cover;"></div>
    <h1 class="display-4 fst-italic text-black baguette" style="text-align: center;padding-top:2%;">Recipe APP</h1>
    <p class="lead my-3 text-black" style="text-align:center;font-family:Georgia, 'Times New Roman', Times, serif;">Recipe Builder</p>

    <!-- Input form -->
    <div class="container">
        <form method="post" action="./phpFunctions/updateRecipeTable.php">
        <div class="form-group">
            <!-- Recipe Name -->
            <label for="recipeName">Recipe Name: </label>
            <input type="text" id="recipeName" class="form-control"  placeholder="Enter Recipe Name" name="recipeName">
        </div>    
            <!-- Skill Level -->
            <label for="skill">Skill Level: </label>
            <select name="skill" id="skill" class="form-select">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        <div class="form-group">
            <!-- Prep Time -->
            <label for="prep"> Prep Time: </label>
            <input type="text" class="form-control" id="prep" placeholder="Enter prep time (e.g. 10 minutes)" name="prep">
        </div>
            <!-- Cook Time -->
            <label for="cookTime"> Cook Time: </label>
            <input type="text" class="form-control" id="cookTime" placeholder="Enter cook time (e.g. 10 minutes)" name="cookTime">
        <div class="form-group">
            <!-- Serving Size -->
            <label for="servingSize"> Serving Size: </label>
            <input type="text" class="form-control" id="servingSize" placeholder="Enter Serving Size (e.g. Feeds 4 people)" name="servingSize">
        </div>

        <div class="form-group">
            <!-- Instructions -->
            <label for="ingredients"> Ingredients: </label>
            <textarea type="text" class="form-control" id="ingredients" placeholder="Enter the ingredient list" rows="10" name="ingredients"></textarea>
        </div>

        <div class="form-group">
            <!-- Instructions -->
            <label for="instructions"> Instructions: </label>
            <textarea type="text" class="form-control" id="instructions" placeholder="Enter the step by step instructions" rows="10" name="instructions"></textarea>
        </div>
        <div style="padding:1%;"></div>
            <!-- Submit -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <div style="padding:2%;"></div>
    <div style="padding:2%;background-image:url('./images/vegiesBG.jpg');background-size:cover;"></div>
    <!-- Bootstrap JS CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>