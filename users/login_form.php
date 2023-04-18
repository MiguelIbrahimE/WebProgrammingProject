<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['name'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
} else {
   $name = '';
}

if(isset($_POST['cpassword'])){
   $cpass = md5($_POST['cpassword']);
} else {
   $cpass = '';
}

if(isset($_POST['user_type'])){
   $user_type = $_POST['user_type'];
} else {
   $user_type = '';
}
@include './config.php';
ini_set('session.gc_maxlifetime', 3600); // Set session lifetime to 1 hour
ini_set('session.cookie_lifetime', 3600); // Set cookie lifetime to 1 hour
session_start();


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE EMAIL = '$email' && PASSWORD = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'LAU'){
         $key = "my-secret-key";
         $method = "AES-256-CBC";
         $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
         
         // Encrypt the data using AES encryption and the generated iv
         $ciphertext = openssl_encrypt($plaintext, $method, $key, 0, $iv);
         
         // Generate a hash of the encrypted data
         $hash = hash('sha256', $ciphertext);
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'AUB'){
         $plaintext=$email;
         $key = "Oblivion";
         $method = "AES-256-CBC";
         $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
         
         // Encrypt the data using AES encryption and the generated iv
         $ciphertext = openssl_encrypt($plaintext, $method, $key, 0, $iv);
         
         // Generate a hash of the encrypted data
         $hash = hash('sha256', $ciphertext);
         $_SESSION['user_name'] = $hash;
         header('location:../php/Tourism.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
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