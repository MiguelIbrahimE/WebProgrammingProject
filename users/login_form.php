<head>
   <link rel="icon" href="../dormitium-logo.png">
  <title>AUB - UULebanon</title>
</head>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include './config.php';
ini_set('session.gc_maxlifetime', 3600); // Set session lifetime to 1 hour
ini_set('session.cookie_lifetime', 3600); // Set cookie lifetime to 1 hour
session_start();

$error = array();

if(isset($_POST['submit'])){
   
   $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
   $pass = isset($_POST['password']) ? md5($_POST['password']) : '';
   
   if(empty($email)){
      $error[] = 'Email is required!';
   }

   if(empty($pass)){
      $error[] = 'Password is required!';
   }

   if(count($error) == 0){

      $select = "SELECT * FROM users WHERE EMAIL = '$email' && PASSWORD = '$pass' ";
      $result = mysqli_query($conn, $select);

      if(mysqli_num_rows($result) > 0){
         // User exists
         $row = mysqli_fetch_array($result);
         header('location: ../Backend/LAU.php');
      }else{
         $error[] = 'Incorrect email or password!';
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>