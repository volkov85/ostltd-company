'use strict';

let offerSwiper = new Swiper(`.swiper-container`, {
  loop: true,
  effect: `fade`,
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: `.offer__slider-button--next`,
    prevEl: `.offer__slider-button--prev`
  }
});

let newsSwiper = new Swiper(`.swiper-container-news`, {
  loop: true,
  slidesPerView: 4,
  spaceBetween: 30,
  freeMode: true,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

// Smooth scrolling script
$(`a`).on(`click`, function (evt) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== ``) {
    evt.preventDefault();

    let hash = this.hash;

    $(`html, body`).animate({
      scrollTop: $(hash).offset().top
    }, 800, () => {
      // Add hash (#) to URL when done scrolling (default click behavior)
      if (hash !== `#top`) {
        window.location.hash = hash;
      }
    });
  }
});

// Hide "Scroll to Top" button
$(window).scroll(function () {
  if ($(this).scrollTop()) {
    $(`.top-link`).fadeIn(800);
  } else {
    $(`.top-link`).fadeOut(800);
  }
});
