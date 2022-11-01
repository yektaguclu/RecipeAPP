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
 

 
 
</head>
 
<body>
 
   <!-- Bootstrap Navbar -->
 
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

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
 
html {
  box-sizing: border-box;
}
 
*, *:before, *:after {
  box-sizing: inherit;
}
 
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
 
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}
 
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
 
.container {
  padding: 0 16px;
}
 
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
 
.title {
  color: grey;
}
 
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
 
.button:hover {
  background-color: #555;
}
 
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
 
<div class="about-section">
  <h1>Want to know more about us?</h1>
  <p>Hi! Welcome to Absent Minded Chef! To give you some background we are a place where you can come to explore reciepes from all over the world. We want to connect the professional chefs with the average home cooks. By Absent Minded Chef being functional we want to be the bridge that transfers the knowledge from one individual to the next.</p>
  <p>Be Sure to check out our team below!</p>
</div>
 
<h2 style="text-align:center">The Absent Minded Team!</h2>
<div class="row">
  <div class="column">
    <div class="card" style="height:95%;">
      <div class="container">
        <h2>Lisa Simpson</h2>
        <p class="title">CEO & Founder</p>
        <p>Lisa graduated from Le Cordon Bleu 5 years ago. She has had multiple executive chef positions across the east coast. Now she wants to give back and be apart of changing the culinary world.</p>
        <p>Lisa@recipeapp.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card" style="height:95%;">
      <div class="container">
        <h2>Samet Yekta Guclu</h2>
        <p class="title">Creative Director</p>
        <p>Samet has a Bachelors degree in business and a Master's degree in Web Development. He is a natural food connoisseur and is inspired to connect his passion with his background.</p>
        <p>Samet@recipeapp.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="height:95%;">
      <div class="container">
        <h2>Albert Ralf</h2>
        <p class="title">Design and Marketing Director</p>
        <p>Albert studied at Harvard but did not finish.  He decided to pursue the internet throughout the 1990s and early 21st.  He was involved with projects such as Facebook, Paypal, and Linkedin.  Now he wants to pursue the culinary industry and bring his experience to the table.</p>
        <p>Albert@recipeapp.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
 
 
   <!-- Bootstrap JS CDNs -->
 
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
 
</body>
 
</html>