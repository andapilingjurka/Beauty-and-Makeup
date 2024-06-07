<?php
include "include/header_transparent.php";
?>

<?php
if (!isset($_SESSION['client'])) {
    header("Location: forms.php");
    exit(); 
}
?>


<div class="skincarevideo">
<video autoplay loop>
    <source src="images/skincare-video.mp4" type="video/mp4">  
</video>
</div>


<div class="content">

        <!--Pjesa e pare e produkteve-->
        <div class="makeup-products first-carousel" data-aos="zoom-in-up" data-aos-duration="900">
        <div class="wrapper makeup">
            <i id="first-left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s1.png" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Soothing Lotion Toner La Roche</h2>
                    <span>16.95 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s2.png" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>La Roche Invisible SPF 50+</h2>
                    <span>23.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s3.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Ordinary Natural Moisturizing</h2>
                    <span>16.50 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s4.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>COSRX Salicylic Acid Cleanser</h2>
                    <span>13.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s5.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>The Ordinary Peeling Solution</h2>
                    <span>12.99 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s6.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>CeraVe Daily Moisturizing Lotion </h2>
                    <span>19.89 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s7.jpeg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Cosrx Snail 92 Advanced Serum </h2>
                    <span>21.00 €</span>
                    </div>
                </div>
            </li>

            </ul>
            <i id="first-right" class="fa-solid fa-angle-right"></i>
        </div>
        </div>




        <!--Pjesa e dyte e produkteve-->
        <div class="makeup-products second-carousel"  data-aos="zoom-in-up" data-aos-duration="1300">
        <div class="wrapper makeup">
            <i id="second-left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s8.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Nourishing Raspberry Lip Balm</h2>
                    <span>2.99 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s9.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Yves Rocher Gel Cream</h2>
                    <span>17.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s10.png" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Cosrx Advanced Snail 92 </h2>
                    <span>14.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s11.jpeg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>CeraVe SALICYLIC ACID Lotion</h2>
                    <span>21.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s12.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Eucerin Sunscreen Hydro Protect </h2>
                    <span>18.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s13.png" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Hyaluronic Acid Water Essence </h2>
                    <span>14.50 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s14.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Pure Arnica Moisturizing Hand Cream</h2>
                    <span>4.99 €</span>
                    </div>
                </div>
            </li>

            </ul>
            <i id="second-right" class="fa-solid fa-angle-right"></i>
        </div>
        </div>



        <!--Pjesa e tret e produkteve-->
        <div class="makeup-products third-carousel"  data-aos="zoom-in-up" data-aos-duration="1700">
        <div class="wrapper makeup">
            <i id="third-left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s15.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>COSRX Low pH Good Morning Gel</h2>
                    <span>13.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s16.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2> Anti-Dryness Cleansing Cream </h2>
                    <span>22.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s17.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>COSRX Acne Pimple Patch</h2>
                    <span>11.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s18.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>COSRX Snail Mucin 92% Repair Cream</h2>
                    <span>24.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s19.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Cerave Body Cleanser </h2>
                    <span>19.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s20.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Nourishing Shea Lip Balm</h2>
                    <span>2.99 €</span>
                    </div>
                </div>
            </li>

            </ul>
            <i id="third-right" class="fa-solid fa-angle-right"></i>
        </div>
        </div>



         <!--Pjesa e katert e produkteve-->
         <div class="makeup-products fourth-carousel"  data-aos="zoom-in-up" data-aos-duration="2100">
        <div class="wrapper makeup">
            <i id="fourth-left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s21.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Yves Rocher Fresh Gel Eye </h2>
                    <span>12.99 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s22.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Eucerin Oil Control SPF 50+</h2>
                    <span>18.95 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s23.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>The Ordinary's Glycolic Acid Toning </h2>
                    <span>21.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s24.png" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Anti Wrinkle Cream Night</h2>
                    <span>52.95 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s25.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>CERAVE Moisturizing Cream </h2>
                    <span>19.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/s26.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>The Ordinary Alpha Arbutin 2%</h2>
                    <span>12.99 €</span>
                    </div>
                </div>
            </li>

            </ul>
            <i id="fourth-right" class="fa-solid fa-angle-right"></i>
        </div>
        </div>
</div>



<?php
    include "include/footer.php";
?> 


