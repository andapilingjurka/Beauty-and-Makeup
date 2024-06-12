<?php
include "functions.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

</head>
<body>

<div class="wrapper" data-aos="fade-right"
     data-aos-offset="500"
     data-aos-easing="ease-in-sine">
    <div class="navbar">
        <div class="logo-name">
                <h1 class="name">Plaza Cosmetics</h1>
        </div>

        <ul>

            <div class="sidebar_link">
                <li>
                    <a href="../home.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title_2">Home</span>
                    </a>
                </li>
            </div>   

            <div class="sidebar_link">
                <li>
                    <a href="../admin/dashboard_client.php">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="title_2">Users</span>
                    </a>
                </li>
            </div>  

            <div class="sidebar_link">
                <li>
                    <a href="../admin/dashboard_contact.php">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <span class="title_2">Messeages</span>
                    </a>
                </li>
            </div>    


        <div class="sidebar-down">
            <div class="sidebar_link">
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog"></i></span>
                        <span class="title_2">Settings</span>
                    </a>
                </li>
            </div>

            <div class="sidebar_link">
                <li>
                    <a href="../logout.php">
                        <span class="icon"><i class="fas fa-power-off"></i></span>
                        <span class="title_2">Log Out</span>
                    </a>
                </li>
            </div>  
        </div>

        </ul>
    </div>
</div>


<script>
    AOS.init();
</script>

