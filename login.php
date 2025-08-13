<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));

   $select = mysqli_query($con, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">


</head>
<body>


    <div class="login">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input">
                    <input type="email" placeholder="Username" name="email" required >
            </div>
         
            <div class="input">
                <input type="password" placeholder="password" name="password" required >
             </div>

             <div class="remember-forgot">
                
                <label> <input type="checkbox"> Remember me</label>
                <a href="#">Forgot password</a>
             </div>

             <button type="submit" name="submit">Login</button>

             <div class="register">
                <p>Don't have an account? <a href="register.php">Register</a>
                </p>



             </div>



        </form>
        


        



    </div>
    
</body>
</html>