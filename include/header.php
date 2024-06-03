<?php
include "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty And Makeup</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="icon" type="image/x-icon" href="images/icon.png"> IKONA FAQES-->  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="index.php">
                    <h3>Destination Dreamers</h3>
                </a>
            </div>
            <div class="navbar">
                <ul class="nav-items">
                    <li><a  href='home.php'>Home</a></li>
                    <li><a  href='contact.php'>Contact Us</a></li>
                    <?php
                        if(isset($_SESSION['client'])){
                            echo "<li><a href='destinations.php'>Destinations</a></li>";
                            echo "<li><a href='staff.php' >About Us</a></li>";
                            
                            if($_SESSION['client']['role']==1){
                                echo "<li><a  href='dashboard/client.php'>Dashboard</a></li>";
                            }
                            echo " <li><a  href='LoginAndRegister/logout.php'>Log Out</a></li>";
                        } elseif (!isset($_SESSION['client'])) {
                      
                            echo "<li><a  href='LoginAndRegister/forms.php'>Sign In</a></li>";
                            
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</header>
