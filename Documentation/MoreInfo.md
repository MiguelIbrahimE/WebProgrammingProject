<?php
session_start();
if(!isset($_SESSION["user_name"])){
  header("Location: ../index.php");
}
?>

    session_start() starts a new session or resumes an existing session.
    !isset($_SESSION["user_name"]) checks if the "user_name" session variable is not set.
    header("Location: ../index.php"); redirects the user to the "index.php" page if the "user_name" session variable is not set.
_____________________________________________________


<?php
require "../config/cfg.php";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// query the database
$query = "SELECT DORM_NAME, UNI_NAME, Price, Type FROM details";
$result = mysqli_query($conn, $query);
?>
    require "../config/cfg.php"; includes the "cfg.php" file that contains the database connection details.
    mysqli_connect($db_host, $db_user, $db_pass, $db_name) creates a new MySQL connection to the database using the connection details from "cfg.php".
    $query = "SELECT DORM_NAME, UNI_NAME, Price, Type FROM details"; defines the SQL query to retrieve data from the "details" table.
    $result = mysqli_query($conn, $query); executes the SQL query and stores the result in the "$result" variable.

___________________________________________________________


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Santona - Dormitium</title>
  <link rel="stylesheet" href="../CSS/Hotels.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <link rel="icon" href="../dormitium-logo.png">
 
</head>

<body>

<?php
require "../navbar/navbar.php";
loadNavBar();
?>

    The code defines the HTML markup of the page.
    The "head" section of the HTML includes links to CSS and JavaScript files, as well as the page title and icon.
    require "../navbar/navbar.php"; includes the "navbar.php" file, which contains the navigation bar.
_____________________________________________________________
