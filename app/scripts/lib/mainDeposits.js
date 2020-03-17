  let mainTopSlider = new Swiper('.mainDepositsSlider .swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 2,
    navigation: {
      nextEl: '.mainDepositsSlider .btn-slide-next',
      prevEl: '.mainDepositsSlider .btn-slide-prev',
    },
    loop: true,
    speed: 400,
  });
