<?php
function loadNavBar(){
    ?>
     
<header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.php" class="brand"><img src="../dormitium-logo.png"style="width:46px"></a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
          <ul class="menu-inner">
             <li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="./LAU.php">LAU</a></li>
             <li class="menu-item"><a class="menu-link" href="./AUB.php">AUB</a></li>
             <li class="menu-item"><a class="menu-link" href="../users/register_form.php">Sign Up/Log In</a></li>
         </ul>
       </div>
       
       
    </nav>
 </header>
    <?php
}
?>