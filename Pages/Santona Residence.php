<?
session_start();
if(!isset($_SESSION["user_name"])){
  header("Location: ../index.php");
}
?>

<?


require "../config/cfg.php";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// query the database
$query = "SELECT DORM_NAME, UNI_NAME, Price, Type FROM details";
$result = mysqli_query($conn, $query);
?>



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


  <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";

    function menutoggle() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }
    }
  </script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>






  <section class="about top">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>WELCOME</h1>
          <h2>To Santona Residence</h2>
          <div style="padding:1%">
            <div style="padding:2%">
                
                
                <div style="float:left">
                    <h2>Residence, for you.</h2>
                </div>
            </div>

            <div>
                <div style="float:left; width:197px; padding:2%">
                    <img src="../Images/santona2.jpg"style="width:200%">
                </div>
               
            </div>

          </div>
        </div>
       </div>
       <br>
      <div class="right" style="width:455px" >
        <img src="../images/fsh.jpg"  style="width:250%"alt="">
      </div>
    </div>
  </section>


  <section class="rooms">
    <div class="container top">
    
      <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="items">
            <div class="image">
              <img src="../images/Studio.jpg" alt="">
            </div>
            <div class="text">
              <h2>Studio Room</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p> For the Students.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$1500 <span> <br> Per Month </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="../images/OneBed.jpg" alt="">
            </div>
            <div class="text">
              <h2>One Bedroom</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Live in style
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$2200 <span> <br> Per Month </span> </h3>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    })
  </script>


  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 4,
        },
        1000: {
          items: 6
        }
      }
    })
  </script>

  <script>
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1,
        },
        1000: {
          items: 1
        }
      }
    })
  </script>



  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>