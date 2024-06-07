<?php
include "include/header_transparent.php";
?>

<?php
if (!isset($_SESSION['client'])) {
    header("Location:forms.php");
    exit(); 
}
?>

        <div class="makeupvideo">
            <video autoplay loop>
                <source src="images/makeupvideo.mp4" type="video/mp4">  
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
                    <img src="images/m1.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Saie Dew Bronze Soft</h2>
                    <span>25.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m2.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>SEPHORA Red Lipstick</h2>
                    <span>15.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m3.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>ELF Power Grip Primer</h2>
                    <span>8.60 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/bestsell1.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Sol De Janeiro</h2>
                    <span>24.89 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m5.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Rare Beauty by Selena Gomez</h2>
                    <span>23.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m30.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>NARS Tinted Moisturizer</h2>
                    <span>46.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m15.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>SEPHORA Eyeliner Pencil</h2>
                    <span>14.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m4.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Charlotte Tilbury Setting Spray</h2>
                    <span>38.00 €</span>
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
                    <img src="images/m9.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Charlotte Tilbury Flawless Filter</h2>
                    <span>49.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m10.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Hoola Bronzer</h2>
                    <span>22.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/bestsell4.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>KIKO Milano Lipgloss</h2>
                    <span>15.59 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m12.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Saie Bronzer Brush</h2>
                    <span>26.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m32.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Dior Lip Glow Oil</h2>
                    <span>40.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m33.png" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Christian Dior Rosy Glow Blush </h2>
                    <span>34.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m20.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Maybelline Mascara</h2>
                    <span>8.99 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m50.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>LAWLESS Blush</h2>
                    <span>29.00 €</span>
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
                    <img src="images/m34.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Dior Mascara</h2>
                    <span>33.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m18.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>MILK MAKEUP</h2>
                    <span>22.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/bestsell3.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>ARMANI Luminous Silk Foundation</h2>
                    <span>55.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m19.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>LANEIGE Lip Glowy Balm</h2>
                    <span>14.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m51.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Charlotte Tilbury Contour Wand</h2>
                    <span>42.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m17.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Natasha Denona Eyeshadow Palette</h2>
                    <span>69.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m21.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>MAKEUP BY MARIO Bronzing</h2>
                    <span>36.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m23.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>ILIA Skincare Foundation</h2>
                    <span>48.00 €</span>
                    </div>
                </div>
            </li>
            </ul>
            <i id="third-right" class="fa-solid fa-angle-right"></i>
        </div>
        </div>



         <!--Pjesa e katert e produkteve-->
         <div class="makeup-products fourth-carousel"  data-aos="zoom-in-up" data-aos-duration="00">
        <div class="wrapper makeup">
            <i id="fourth-left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m14.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>ELF Eyeliner</h2>
                    <span>8.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m24.jpeg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Essence Hydrating Nude Lipstick</h2>
                    <span>6.95 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m25.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>La Girl Pro Concealer</h2>
                    <span>5.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m26.png" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>NARS Eyeshadow Palette</h2>
                    <span>35.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m27.jpeg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Revolution Beauty Concealer</h2>
                    <span>7.00 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m28.jpeg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>EssenceLash Princess Mascara</h2>
                    <span>4.99 €</span>
                    </div>
                </div>
            </li>

            <li class="card makeup-card">
                <div class="img">
                    <img src="images/m29.jpg" alt="img" draggable="false">
                    <div class="text-overlay">
                    <h2>Maybelline Liquid Lipstick</h2>
                    <span>9.98 €</span>
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










