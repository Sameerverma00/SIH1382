<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> BusMate Tracker - Stay on track</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        </head>
<body>
    <nav>
        <ul>
            <li class="brand"><img src="LOGO1.png" alt="Busmate"> BusMate-Tracker</li>
            <li><a style="color:aliceblue" href="index.php" target="_self" >Home</a></li>
            <li><a style="color:aliceblue" href="Links/About/AboutIndex.php" target="_self" >About</a></li>
            <!-- <li><a style="color:aliceblue" href="http://localhost/Registration/signin.php" target="_self"  >Login/SignUp</a></li> -->
            <li><p>
                Welcome USER
                <strong> 
                    <?php echo $_SESSION['username']; ?>
                </strong>
            </p>
            </li>
            <li>
                <p>
                <a href="front.html?logout='1'" style="color: red;">
                    Click here to Logout
                </a>
            </p>
            </li>

            <!-- <li>SingUp</li> -->
        </ul>
    </nav>

    <div class="slider">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              
              <div class="swiper-slide"><img src="slide/bs4.jpg" alt="s3"></div>
              <div class="swiper-slide"><img src="slide/bs1.jpg" alt="s2"></div>
              <div class="swiper-slide"><img src="slide/bs2.jpg" alt="s3"></div>
              
              <div class="swiper-slide"><img src="slide/bs0.jpg" alt="s1"></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
          </div>
    </div>
    <div class="container">
        <div class="songList">
            <h1 style="color:black">Himachal Pradesh Smart Transportation System</h1>
            <h1 style="color:black"><center>(Non-Ac Bus)</center></h1>
            <div class="songItemContainer">
                <div class="BusItem">
                    <img alt="1">
                    <span class="BusName">HP2157 -  Ambala to Baddi Bus - 09:30 Am to 02:00 Pm </span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="Links/non/1/1aindex.php" target="_self" >Click Here</a><i id="0" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="2">
                    <span class="BusName">HP1248 -  Amritsar to Shahpur Bus - 06:40 Pm to 10:30 Pm</span>
                    <span class="songlistplay"><span class="link"   ><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="1" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="3">
                    <span class="BusName">HP1482 -  Amritsar to Sarkaghat Bus - 07:40 Am to 05:30 Pm</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="2" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="4">
                    <span class="BusName">HP1235 -  Amritsar to Bilaspur Bus  - 08:45 Pm to 06:15 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="3" ></i></span></span>
                </div>
                <div class="BusItem">
                    <img alt="5">
                    <span class="BusName">HP1486 -  Dharamshala to Chandigarh Bus - 06:45 Pm to 01:00 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="4" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="6">
                    <span class="BusName">HP1647 -  Anni to Kullu Bus - 05:00 Am to 07:30 Pm</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="5" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="7">
                    <span class="BusName">HP2345 -  Baddi to Hamirpur Bus - 04:20 Am to 09:10 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="6" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="8">
                    <span class="BusName">HP1873 -  Baddi to Delhi Bus  - 08:45 Pm to  03:30 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="7" ></i> </span></span>
                </div>
                
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="songList">
            <h1 style="color:black">Himachal Pradesh Smart Transportation System</h1>
            <div class="songItemContainer">
                <div class="BusItem">
                    <img alt="1">
                    <span class="BusName">HP2157 -  Ambala to Baddi Bus - 09:30 Am to 02:00 Pm </span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="" target="_self" >Click Here</a><i id="0" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="2">
                    <span class="BusName">HP1248 -  Amritsar to Shahpur Bus - 06:40 Pm to 10:30 Pm</span>
                    <span class="songlistplay"><span class="link"   ><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="1" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="3">
                    <span class="BusName">HP1482 -  Amritsar to Sarkaghat Bus - 07:40 Am to 05:30 Pm</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="2" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="4">
                    <span class="BusName">HP1235 -  Amritsar to Bilaspur Bus  - 08:45 Pm to 06:15 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="3" ></i></span></span>
                </div>
                <div class="BusItem">
                    <img alt="5">
                    <span class="BusName">HP1486 -  Dharamshala to Chandigarh Bus - 06:45 Pm to 01:00 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="4" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="6">
                    <span class="BusName">HP1647 -  Anni to Kullu Bus - 05:00 Am to 07:30 Pm</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="5" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="7">
                    <span class="BusName">HP2345 -  Baddi to Hamirpur Bus - 04:20 Am to 09:10 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="6" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="8">
                    <span class="BusName">HP1873 -  Baddi to Delhi Bus  - 08:45 Pm to  03:30 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="7" ></i> </span></span>
                </div>
                
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="songList">
            <h1 style="color:black">Himachal Pradesh Smart Transportation System</h1>
            <div class="songItemContainer">
                <div class="BusItem">
                    <img alt="1">
                    <span class="BusName">HP2157 -  Ambala to Baddi Bus - 09:30 Am to 02:00 Pm</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="" target="_self" >Click Here</a><i id="0" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="2">
                    <span class="BusName" >HP1248 -  Amritsar to Shahpur Bus - 06:40 Pm to 10:30 Pm</span>
                    <span class="songlistplay"><span class="link"   ><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="1" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="3">
                    <span class="BusName">HP1482 -  Amritsar to Sarkaghat Bus - 07:40 Am to 05:30 Pm</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="2" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="4">
                    <span class="BusName">HP1235 -  Amritsar to Bilaspur Bus  - 08:45 Pm to 06:15 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="3" ></i></span></span>
                </div>
                <div class="BusItem">
                    <img alt="5">
                    <span class="BusName">HP1486 -  Dharamshala to Chandigarh Bus - 06:45 Pm to 01:00 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="4" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="6">
                    <span class="BusName">HP1647 -  Anni to Kullu Bus - 05:00 Am to 07:30 Pm</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="5" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="7">
                    <span class="BusName">HP2345 -  Baddi to Hamirpur Bus - 04:20 Am to 09:10 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="6" ></i> </span></span>
                </div>
                <div class="BusItem">
                    <img alt="8">
                    <span class="BusName">HP1873 -  Baddi to Delhi Bus  - 08:45 Pm to  03:30 Am</span>
                    <span class="songlistplay"><span class="link"><a style="text-decoration:none" href="https://www.abhibus.com/bus-tickets/hrtc-amritsar-sarkaghat-bus-booking" target="_self" >Click Here</a><i id="7" ></i> </span></span>
                </div>
                
                
            </div>
        </div>
    </div>

   <!--  <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
            fontawesome icons 
            <i class="fas fa-3x fa-step-backward" id="previous"></i>
            <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-3x fa-step-forward" id="next"></i> 
        </div>
        <div class="songInfo">
            <img src="playing.gif" width="42px" alt="" id="gif"> <span id="masterSongName">Bad Liar -Imagine Dragons</span>
        </div>-->
        <h6>@BusMate Tracker by V-Company</h6>
    </div>
    <script src="f-script.js"></script>
    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay:{
                delay: 3000,
                disableOnInteraction:false,
            }, 
            // Optional parameters
            loop: true,
          
            // If we need pagination
            pagination: {
              el: '.swiper-pagination',
              clickable:true,
            },
          
            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
          });
    </script>
</body>
</html>