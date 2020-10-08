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
