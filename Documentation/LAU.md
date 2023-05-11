This code is a PHP script that generates an HTML page with a list of dormitories available for rent near the Lebanese American University (LAU). The script uses PDO to connect to a MySQL database and retrieve data about each dormitory. The retrieved data is then used to generate HTML elements such as images, links, and text to display the dormitories' details.



<?php
session_start();
if(!isset($_SESSION["user_name"])){
  header("Location: ../index.php");
}
?>

This block of code starts a PHP session and checks if the user is logged in. If the user is not logged in, the script redirects the user to the index page.



_____________________________________________________


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

This section defines the HTML structure of the page and loads a navbar component using a PHP include statement. The CSS stylesheet and page title are also defined in this section.
___________________________________________________________

<?php
require "../config/cfg.php";
?>
This line includes a file that contains the database connection configuration parameters.
___________________________________________________________

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

This section defines a set of radio buttons that allow the user to filter the displayed dormitories based on their distance from the LAU campus.
____________________________________________________________

<?php
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $pdo->query("SELECT NAME,CAPACITY,RENTING_FEES,NMB_DESKS,WIFI,ELEC_SUPPLY,NBM_BED,DISTANCE_TO_UNI,LOCATION,Type FROM lau_dorms");
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

This block of code establishes a PDO database connection and retrieves data from a MySQL database. The query retrieves data about each dormitory's name, capacity, renting fees, number of desks, Wi-Fi availability, electricity supply, number of beds, distance to LAU, location, and type.
____________________________________________________________


Overall:

This is a PHP file that displays a list of dormitories with filtering options based on certain categories.

The code starts with a PHP block that checks if the session variable "user_name" is set. If it is not set, it redirects the user to the index.php page. This is used as a security measure to ensure that only authenticated users can access this page.

Next, an HTML page is started, with the head section including the link to the website icon and a reference to an external stylesheet. The title of the page is also set to "LAU - Dormitium".

Then, a PHP block is used to require the navbar.php file and call the loadNavBar() function to display the navigation bar.

After that, there are a few line breaks and a new PHP block that requires the cfg.php file, which contains the database connection details.

Following that, an HTML section starts with a "section" tag with a "class" attribute set to "author-archive". Inside this section, there is a "div" tag with a "class" attribute set to "container". Inside this "div", there are three radio buttons with different values, each of which is associated with a label. These radio buttons are used to filter the dormitory list based on certain categories.

Then, a PHP block is used to connect to the database and retrieve the dormitory details from the "lau_dorms" table. The dormitory details are fetched using the PDO fetchAll method, which returns an array of associative arrays. Each associative array contains the details of a single dormitory.

The dormitory details are then displayed using an ordered list with a class attribute set to "posts". Each dormitory is displayed in a list item with a class attribute set to "post". The category of each dormitory is set as a data attribute on the list item. Inside the list item, there is an article tag containing a figure tag with an image of the dormitory. The figure tag also contains a figcaption tag with the dormitory name, category, and rent details.

Finally, there is a closing body tag and a script tag that defines a JavaScript function "run". However, the function is not implemented, and there is no call to it anywhere in the code. The HTML page is then closed using the closing HTML tag.