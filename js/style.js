//Levizja e div per animation
AOS.init();

//Pjesa e slider per produktet me te shitura
document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: true,
    },
    spaceBetween: 60,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});

//Pjesa e slider per produktet tek makeup dhe skincare
document.addEventListener("DOMContentLoaded", function () {
  const firstCarousel = document.querySelector(".first-carousel .carousel");
  const secondCarousel = document.querySelector(".second-carousel .carousel");
  const thirdCarousel = document.querySelector(".third-carousel .carousel");
  const fourthCarousel = document.querySelector(".fourth-carousel .carousel");
  const cardWidth = firstCarousel.querySelector(".makeup-card").offsetWidth;
  const cardPerView = 4;
  let isMoving = false;

  function moveCarousel(carousel, direction) {
    if (!isMoving) {
      isMoving = true;
      const scrollAmount = cardWidth * cardPerView * direction;
      carousel.scrollBy({
        left: scrollAmount,
        behavior: "smooth",
      });

      setTimeout(function () {
        const children = Array.from(carousel.children);
        const firstCard = children[0];
        const lastCard = children[children.length - 1];

        if (direction === 1) {
          if (children.length > cardPerView) {
            carousel.removeChild(firstCard);
          }
          carousel.appendChild(firstCard.cloneNode(true));
        } else {
          if (children.length > cardPerView) {
            carousel.removeChild(lastCard);
          }
          carousel.insertBefore(lastCard.cloneNode(true), carousel.firstChild);
        }

        if (direction === 1) {
          carousel.scrollLeft += firstCard.offsetWidth;
        } else {
          carousel.scrollLeft -= firstCard.offsetWidth;
        }

        isMoving = false;
      }, 500);
    }
  }

  function setupCarouselButtons(carousel, leftButton, rightButton) {
    leftButton.addEventListener("click", function () {
      moveCarousel(carousel, -1);
    });

    rightButton.addEventListener("click", function () {
      moveCarousel(carousel, 1);
    });
  }

  setupCarouselButtons(
    firstCarousel,
    document.getElementById("first-left"),
    document.getElementById("first-right")
  );
  setupCarouselButtons(
    secondCarousel,
    document.getElementById("second-left"),
    document.getElementById("second-right")
  );
  setupCarouselButtons(
    thirdCarousel,
    document.getElementById("third-left"),
    document.getElementById("third-right")
  );
  setupCarouselButtons(
    fourthCarousel,
    document.getElementById("fourth-left"),
    document.getElementById("fourth-right")
  );

  function checkCarouselPosition(carousel) {
    const children = Array.from(carousel.children);
    const lastCard = children[children.length - 1];

    if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
      carousel.scrollLeft -= lastCard.offsetWidth;
    }
  }

  setInterval(function () {
    checkCarouselPosition(firstCarousel);
    checkCarouselPosition(secondCarousel);
    checkCarouselPosition(thirdCarousel);
    checkCarouselPosition(fourthCarousel);
  }, 1000);
});
