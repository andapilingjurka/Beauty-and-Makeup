<?php
include "include/header_white.php";
?>

<div class="slide-bar">
        <div class="img" id="image-slider">

        </div>
</div>

<div id="card-area">
		<div class="wrapper">
			<div class="box-area">
				<div class="box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400">
					<img alt="" src="images/card1.jpg">
					<div class="overlay">
						<h3>Make Up</h3>
						<p>Enhance your natural beauty with our versatile makeup collection, designed to bring out the best in you for any occasion.</p>
                        <a href="makeup.php">Shop Now</a>
					</div>
				</div>
				<div class="box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
					<img alt="" src="images/card2.jpg">
					<div class="overlay">
						<h3>Skin Care</h3>
						<p>Achieve a radiant, healthy glow with our premium skincare products, tailored to nourish and rejuvenate all skin types.</p>
                        <a href="skincare.php">Shop Now</a>
					</div>
				</div>
				<div class="box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1200">
					<img alt="" src="images/card3.jpg">
					<div class="overlay">
						<h3>How To Use</h3>
						<p>Discover the perfect routine with our step-by-step guides, helping you make the most of your makeup and skincare products effortlessly.</p>
                        <a href="#">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="quality">
    	<div class="main-quality">
			<div class="main-inner-quality" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="quality-content">
					<h1>What We Offer?</h1>
					<p>
					Welcome to Aquamarine, your ultimate destination for makeup and beauty. Our website offers a curated 
					selection of high-quality beauty products to enhance your natural radiance and cater to your style. 
					We believe beauty is a personal journey, and our range of cosmetics and skincare products empowers 
					you to express your unique self. From vibrant lipsticks and luxurious foundations to rejuvenating 
					skincare treatments, every product is chosen for its quality and effectiveness. Discover the 
					transformative power of makeup and skincare with Aquamarine, where your beauty dreams become reality.
					</p>
				</div>
			</div>

			<div class="main-inner-quality" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<div class="quality-content quality-image">
						<img src="images/img2.png" alt="">
					</div>
			</div>
    </div>
</div>


 	<div class="bestsellers-text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100">
		<h1>Our Bestsellers</h1>
	</div>
	<section>
		<div class="swiper" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-slide--one">
					<div>
						<h2>Sol De Janeiro</h2>
						<p>24.89 €</p>
					</div>
				</div>

				<div class="swiper-slide swiper-slide--four">
					<div>
						<h2>KIKO Milano Lipgloss</h2>
						<p>15.59 €</p>
					</div>
				</div>

				<div class="swiper-slide swiper-slide--two">
					<div>
						<h2>The Ordinary 30% Milky Toner</h2>
						<p>14.00 €</p>
					</div>
				</div>

				<div class="swiper-slide swiper-slide--three">
					<div>
						<h2>ARMANI Luminous Silk Foundation</h2>
						<p>55.00 €</p>
					</div>
				</div>


				<div class="swiper-slide swiper-slide--five">
					<div>
						<h2>Lip Sleeping Mask</h2>
						<p>24.00 €</p>
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>



<?php
    include "include/footer.php";
?>
