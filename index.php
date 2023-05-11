<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dormitium</title>

    <!-- Link to the favicon -->
    <link rel="icon" href="./dormitium-logo.png">

    <!-- Link to the Google font 'Cedarville Cursive' -->
    <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
    
    <!-- Link to the Google font 'Tangerine' -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="./CSS/indexstyles.css">
</head>
<body>

    <a href="index.html" class="logo" target="_blank">
        <img src="./dormitium-logo.png" alt=""  style="width:50px;height:50px">
    </a>
    <a href="index.html" class="logo" target="_blank">
        <img src="./logo-color.png" alt=""  style="width:50px;height:50px">
    </a>
    <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
    <label for="menu-icon"></label>
    <nav class="nav"> 		
        <ul class="pt-5">
            <li><a href="./users/register_form.php">LAU</a></li>
            <li><a href="./users/register_form.php">AUB</a></li>
        </ul>
    </nav>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
   
   <br>
   <br>
<div style="align-items: center;align-self: center;">
    <h1 style="text-align: center;align-items: center; margin: 0%;">Dormitium, Your Dorm Provider</h1>
  </div>
  <br>
  <br> <br>
  <br>
  <br>
  <div style="padding: 10%;">
    <div>
      <div class="content_img" style="float: left; width: 45%; padding-bottom: 10px;">
        <img src="./Images/AUB-logo.png" style="width: 100%;" onclick="Tourism();">
        <div style="text-align: center;">AUB</div>
      </div>
      <div>
        <div class="content_img" style="float: right; width: 47%; padding-bottom: 10px;">
          <img src="./Images/lau-logo-social-media.jpg" style="width: 100%;" onclick="Restau()">
          <div style="text-align: center;">LAU</div>
        </div>
      </div>
      <div></div>
      <div></div>
    </div>
  </div>
   <br>
   <br>
   <br>
   <br>
   <br>

   <br>
</body>
<script>
  function Restau(){
    document.location.href="./Pages/LAU.php"
  }
  function Tourism(){
    document.location.href="./Pages/AUB.php"
  }
</script>
</html>
