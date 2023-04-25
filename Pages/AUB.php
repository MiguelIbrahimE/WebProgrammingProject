<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head-->
  <link rel="icon" href="../dormitium-logo.png">
  <link rel="stylesheet" type="text/css" href="../CSS/Display.css">
  <!--Burger Icon-->
  <title>AUB - Dormitium</title>
</head>
<body>
  <!-- Start of HTML and NavBar-->
  <?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>
  <br><br><br><br>

 <?php
require "../config/cfg.php";
?>
<section class="author-archive">
      <!-- HTML -->
        <div class="container">
        <!--Defining set elements-->
          <input type="radio" id="All" name="categories" value="All" checked>
          <input type="radio" id="Lebanese" name="categories" value="Lebanese">
          <input type="radio" id="Italian" name="categories" value="Italian">
          <input type="radio" id="Japanese" name="categories" value="Japanese">
          <input type="radio" id="Indian" name="categories" value="Indian">
          <input type="radio" id="Others" name="categories" value="Others">
      <!-- Enabling filtering and how to define them and display them-->
          <ol class="filters">
            <li>
              <label for="All">All</label>
            </li>
            <li>
              <label for="Lebanese">Lebanese</label>
            </li>
           
            <li>
              <label for="Italian">Italian</label>
            </li>
            <li>
              <label for="Japanese">Japanese</label>
            </li>
            <li>
              <label for="Indian">Indian</label>
            </li>
            <li>
              <label for="Others">Others</label>
            </li>
          </ol>
<?php
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $pdo->query("SELECT NAME,Rating,NUMBER_OF_RATINGS,Type FROM restaurants");
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<ol class="posts">
  <?php
  if ($result) {
    
    foreach($result as $row) {
      $name = $row["NAME"];
      $ratings= $row["Rating"];
      $nmb_rating=$row["NUMBER_OF_RATINGS"];
      $type=$row["Type"];

      ?>
   
     <li class="post" data-category=<?php echo''.$type?>>
              <!--1024x740!-->
               <article>
                 <figure>
                   <?php echo'<a hre  f="'.$name.'.php" target="_blank">'?>
                    <?php echo' <img src="../Restaurants/'.$name.'.jpg" alt="">'?>
                   </a>
                   <figcaption>
                     <ol class="post-categories">
                       <li>
                         <a href=""><?php echo ''.$type?></a>
                       </li>
                      
                     </ol>
                     <h2 class="post-title">
                       <?php echo  '<a href=./'.$name.'.php target="_blank">';?><?php echo''.$name ?>
                       </a>
                     </h2>
                     <?php
                     $floor_num = floor($ratings);
                     
                   echo  '<p> Rating: '.$ratings.' Rated by: '.$nmb_rating.' users</p>';?>
                    
                    
                   </figcaption>
                 </figure>
               </article>
             </li>
   <?php }
  } else {
    echo "0 results";
  }
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$pdo = null;
?>
</ol>
</body>
<script>
  function run(){
    const id=document.getElementById();
  }
</script>
</html>