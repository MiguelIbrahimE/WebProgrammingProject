<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head-->
   <link rel="icon" href="../dormitium-logo.png">
  <link rel="stylesheet" type="text/css" href="../CSS/Display.css">
  <!--Burger Icon-->
  <title>LAU - Dormitium</title>
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
          <input type="radio" id="Closest" name="categories" value="Closest">
          <input type="radio" id="Near" name="categories" value="Near">
               <!-- Enabling filtering and how to define them and display them-->
          <ol class="filters">
            <li>
              <label for="All">All</label>
            </li>
            <li>
              <label for="Closest">Closest</label>
            </li>
           
            <li>
              <label for="Near">Near</label>
            </li>
           
          </ol>
<?php
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $pdo->query("SELECT NAME,CAPACITY,RENTING_FEES,NMB_DESKS,WIFI,ELEC_SUPPLY,NBM_BED,DISTANCE_TO_UNI,LOCATION,Type FROM lau_dorms");
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<ol class="posts">
  <?php
  if ($result) {
    
    foreach($result as $row) {
      $name = $row["NAME"];
      $renting= $row["RENTING_FEES"];
      $capacity=$row["CAPACITY"];
      $type=$row["Type"];

      ?>
   
     <li class="post" data-category=<?php echo''.$type?>>
              <!--1024x740!-->
               <article>
                 <figure>
                   <?php echo'<a hre  f="'.$name.'.php" target="_blank">'?>
                    <?php echo' <img src="../Images/'.$name.'.jpg" alt="">'?>
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
                     
                   echo  '<p> Renting Per Month: '.$renting.' Capacity: '.$capacity.' </p>';?>
                    
                    
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