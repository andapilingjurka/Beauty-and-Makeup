<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plaza Cosmetics</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</head>
<body>
<header>
        <nav class="navbar">
            <div class="top-section">
                
                <div class="logo">
                    <a href="./home.php"><h1 style="color:#fff;">Plaza Cosmetics</h1></a>
                </div>
                <div class="icons">
                    <i class="bi bi-person" style="color:#fff;"></i>
                    <i class="bi bi-heart-fill" style="color:#fff;"></i>
                    <i class="bi bi-cart" style="color:#fff;"></i>
                </div>
            </div>
            <ul class="nav-links nav-links-black">
                <li><a href='./home.php' style='color:#fff;'>Home</a></li>
                <li><a href='./aboutus.php' style='color:#fff;'>About Us</a></li>
                <?php 
                    if(isset($_SESSION['client'])){
                        echo"<li><a href='./makeup.php' style='color:#fff;'>Make up</a></li>";
                        echo"<li><a href='./skincare.php' style='color:#fff;'>Skin Care </a></li>";
                        echo"<li><a href='./contact.php' style='color:#fff;'>Contact Us</a></li>";
                    if($_SESSION['client']['role']==1){
                        echo"<li><a href='./admin/dashboard_client.php' style='color:#fff;'>Dashboard</a></li>";
                    }
                    echo "<li><a href='./logout.php' style='color:#fff;'>Log Out</a></li>";      
                }   
                elseif (!isset($_SESSION['client'])) {
                    echo "<li><a href='./forms.php' style='color:#fff;'>Sign In</a></li>";
                }
            ?>        
            </ul>
        </nav>
    </header>

    

    <script src="./js/style.js"></script>
  
    

