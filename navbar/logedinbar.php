<?php
require "../config/cfg.php";


function loadNavBar(){
   if (isset($_SESSION["user_name"])) {
      $email= $_SESSION["user_name"];
      $plaintext=$email;
      $key = "Oblivion";
      $method = "AES-256-CBC";
      $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
               
      // Encrypt the data using AES encryption and the generated iv
      $plaintext = openssl_decrypt($plaintext, $method, $key, 0, $iv);

      $conn = mysqli_connect("hostname", "username", "password", "database_name");

        // check if email exists in users table
        $query = "SELECT * FROM users WHERE email = '$plaintext'";
        $result = mysqli_query($conn, $query);


        if (mysqli_num_rows($result) > 0) {

    ?>

<header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.php" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
         
       </div>
       <span><i class="bx bx-search search-toggle"></i></span>
       <div class="search-block">
          <form class="search-form">
             <span><i class="bx bx-arrow-back search-cancel"></i></span>
             <input type="search" name="search" class="search-input" placeholder="Search here...">
          </form>
          <div id="search-results"></div>
       </div>
       
    </nav>
 </header>
    <?php
}else{
   header("../index.php");
}
   }
else{
   header("../index.php");
}
}
?>
<?php 

?>
