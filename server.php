<?php
   session_start();
   $username = $password = "";
   // create connection
   $conn = mysqli_connect("localhost", "bowofade", "JOS/eph/96", "bowofade");

   // check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   } else {
      echo "Database connected successfully";
   }
   
   // declaring variables
   $errors = array("password"=>"", "username"=>"", "user"=>"");
   
   if (isset($_POST['login'])){
      if(empty($_POST['$username'])){
      $errors["username"] = "Username cannot be empty";
      } else {
      $username = test_input($username);
      $username = filter_var($username, FILTER_SANITIZE_STRING);
      }
      if(empty(test_input($_POST['$password']))){
      $errors["password"] = "password cannot be empty";
      } else {
      $password = test_input($password);
      }

      if (count($errors) < 1) {
         $query = "SELECT * FROM login WHERE username='$username' AND password='$password' ";
         $result = mysqli_query($conn, $query);
         if (mysqli_num_rows($result) == 1) {
            // login user
            $_SESSION['username'] = $username;
            header('location: message.php');
         } else {
            $errors["user"] = "Unrecognise user";
         }
      }
   }
   

   function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }
?>