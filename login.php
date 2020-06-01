<?php 
   require 'server.php';

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="keyword"
         content="bowo, bowofade, websites freelancer, web developer, nigeria web developer, flutter developer, android apps developer, oyerinde bowofade bukunmi, Networker, j2fashion, uniabuja developer, ios developer, ios app, fullstack freelancer, php developer, laravel, abuja developer">
      <title>bowofade</title>

      <!--fontawesome script-->
      <script src="https://kit.fontawesome.com/ab7d4c3953.js" crossorigin="anonymous"></script>
      <script src="js/random.js"></script>

      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css" />
   </head>

   <body style="background-image: url('image/city2.jpg'); background-size: cover;">
      <nav class="navbar navbar-expand-md bg-color navbar-dark d-lg-none sticky-top">
         <!-- Brand -->
         <a class="navbar-brand" href="index.html"><img src="image/name.png" alt="bowofade.com"
               style="max-width: 220px;"></a>

         <!-- Toggler/collapsibe Button -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon d-block"></span>
         </button>

         <!-- Navbar links -->
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link font-weight-bold a-link" href="index.html">Home</a>

               <li class="nav-item">
                  <a class="nav-link font-weight-bold a-link" href="#about">About</a>

               <li class="nav-item">
                  <a class="nav-link font-weight-bold a-link" href="#resume">Resume</a>

               <li class="nav-item">
                  <a class="nav-link font-weight-bold a-link" href="#service">Services</a>

               <li class="nav-item">
                  <a class="nav-link font-weight-bold a-link" href="#">Portfolio</a>

               <li class="nav-item">
                  <a class="nav-link font-weight-bold a-link" href="#contact">Contact</a>

            </ul>
         </div>
      </nav>
      <div class="container">
         <div class="row mt-5 pt-5">
            <div class="col-sm-8 col-md-4 offset-sm-2 offset-md-4">
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-100 pb-3 rounded border" style="background-color: rgba(50, 50, 50, .5);">
               <h3 class="text-white text-center w-100 bg-color p-3 mt-0">Sign-in</h3>
               <span class="error text-danger text-center mx-auto"><?php echo $errors["user"]; ?></span>
                  <div class="form-group px-3">
                     <label for="usr" class="text-white">Username:</label>
                     <input type="text" class="form-control" id="usr" name="username" value="<?php echo $username; ?>">
                     <span class="error text-danger"><?php echo $errors["username"]; ?></span>
                  </div>
                  <div class="form-group px-3">
                     <label for="pwd" class="text-white">Password:</label>
                     <input type="password" class="form-control" id="pwd" name="password" value="<?php echo $password; ?>">
                     <span class="error text-danger"><?php echo $errors["password"]; ?></span>
                  </div>
                  <input type="submit" value="login" class="form-control w-25 bg-color text-white mx-auto text-center">
               </form>
            </div>
         </div>
      </div>
   </body>

</html>