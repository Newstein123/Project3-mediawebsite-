<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Voice Magzine </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Annimated CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

 <!-- navbar starts -->

 <div class="navbar">
        <div class="navbar-cover"> 
        <div class="nav-logo">
            <img src="Photos/voice_logo.png" alt="">
        </div>
        <div class="toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="navbar-title text-black">
            <ul>
                <li><a href="index.php" class="active"> Home </a> </li>
                <li>
                <?php if(!isset($_SESSION['auth'])): ?> <p style="color:red;"> * Please Log in to see what categories are avaiable. </p><?php endif ?>
                    <?php if(isset($_SESSION['auth'])): ?>
                    <div class="dropdown">
                        <div class="main-title">
                       CATEGORIES <span>
                         <i class="fa-solid fa-caret-down icon"> </i>
                    </span>
                        </div>
                        <div class="subtitle-box"> 
                       <div class="sub-title">
                        <ul>
                            <li> <a href=""> Beauty </a> </li>
                        </ul>
                       </div>
                       <div class="sub-title">
                        <ul>
                            <li> <a href="health.php"> Health </a> </li>
                        </ul>
                       </div>
                       <div class="sub-title">
                        <ul>
                            <li> <a href="sports.php"> Sports </a> </li>
                        </ul>
                       </div>
                       <div class="sub-title">
                        <ul>
                            <li> <a href="tech.php"> Technology </a> </li>
                        </ul>
                       </div>
                       </div>
                    </div>
                    <?php endif ?>
                 
                </li>
                <li><a href="aboutus.php" class="active-about"> About</a></li>
                <li><a href="contactus.php" class="active-contact"> Contact</a></li>
            </ul>   
        </div>
        <div class="signin">
                <ul> 
                    <?php if(!isset($_SESSION['auth'])):?>
                    <li><button> <a href="login.php"> Login </a></button> </li>
                    <li><button> <a href="register.php"> Sign Up </a></button> </li>
                    <?php  else:  ?>
                    <li><button> <a href="logout.php"> Logout  </a></button> </li>
                    <?php endif ?>
                </ul>  
            </div>    
        <div class="navbar-social text-black">
            <ul>
                <li><a href=""><i class="fa-brands fa-facebook">        </i></a></li>
                <li> <a href=""><i class="fa-brands fa-instagram-square"></i></a></li>
                <li> <a href=""><i class="fa-brands fa-linkedin">        </i></a></li>
                <li> <a href=""><i class="fa-brands fa-weixin">          </i></a></li>
            </ul>
            </div>
        </div>
    </div>
    <!-- navbar end  -->

