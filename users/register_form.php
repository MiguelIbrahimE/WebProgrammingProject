<?php

@include './config.php';
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
session_start();

if(isset($_POST['submit'])){
   $current_time = date('Y-m-d H:i:s');
   $current_time2 = date('Y-m-d H:i:s');
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $email_regex = '/^[a-zA-Z0-9._%+-]+@(gmail|outlook|yahoo)\.(com|net|org)$/i';
   if (!preg_match($email_regex, $email)) {
      $error[] = 'invalid email address!';
   }
   $select = "SELECT * FROM users WHERE email = '$email' && PASSWORD = '$pass'";
   $result = mysqli_query($conn, $select);
   if (!$result) {
      die('Query failed: ' . mysqli_error($conn));
   }
   
   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exists!';
   } else {
      if($pass != $cpass){
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO users(NAME, EMAIL, PASSWORD, TYPE, CREATION_DATE, MODIFICATION_DATE) 
         VALUES('$name', '$email', '$pass', '$user_type', '$current_time', '$current_time2')";
         mysqli_query($conn, $insert);

       
         header('location:login_form.php');
      }
   }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   <link rel="icon" href="../dormitium-logo.png">
  <title>AUB - UULebanon</title>

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type" >
         <option value="LAU">LAU</option>
         <option value="AUB">AUB</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>