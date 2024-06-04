<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquamarine</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="slick.min.js"></script>
    
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="top-section">
                
                <div class="logo">
                    <a href="./home.php"><h1>Aquamarine</h1></a>
                </div>
                <div class="icons">
                    <i class="bi bi-person"></i>
                    <i class="bi bi-heart-fill"></i>
                    <i class="bi bi-cart"></i>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href='./home.php'>Home</a></li>
                <li><a href='#'>About Us</a></li>
                <?php 
                    if(isset($_SESSION['client'])){
                        echo"<li><a href='#'>Make up <img src='images/down-arrow.png' class='down-arrow' /></a>
                                <ul class='dropdown'>
                                    <li><a href='#'>Eyes</a></li>
                                    <li><a href='#'>Face</a></li>
                                    <li><a href='#'>Lips</a></li>
                                    <li><a href='#'>Nails</a></li>
                                    <li><a href='#'>Brushes</a></li>
                                </ul>
                            </li>";
                        echo"<li><a href='#'>Skin Care <img src='images/down-arrow.png' class='down-arrow' /></a>
                                <ul class='dropdown'>
                                    <li><a href='#'>Face Care</a></li>
                                    <li><a href='#'>Eye Care</a></li>
                                    <li><a href='#'>Lip Care</a></li>
                                    <li><a href='#'>Hand Care</a></li>
                                    <li><a href='#'>Foot Care</a></li>
                                    <li><a href='#'>Body Care</a></li>
                                </ul>
                            </li>";
                        echo"<li><a href='#'>How To <img src='images/down-arrow.png' class='down-arrow' /></a>
                             <ul class='dropdown'>
                                 <li><a href='#'>Eye Makeup Tips</a></li>
                                 <li><a href='#'>Face Makeup Tips</a></li>
                                 <li><a href='#'>Lips Makeup Tips</a></li>
                                 <li><a href='#'>Skin Care Tips</a></li>
                             </ul>
                          </li>";
                    if($_SESSION['client']['role']==1){
                        echo"<li><a href='#'>Dashboard</a></li>";
                    }
                    echo "<li><a href='./logout.php'>Log Out</a></li>";      
                }   
                elseif (!isset($_SESSION['client'])) {
                    echo "<li><a href='./forms.php'>Sign In</a></li>";
                }
            ?>        
            </ul>
        </nav>
    </header>

    
    <script src="./js/style.js"></script>
