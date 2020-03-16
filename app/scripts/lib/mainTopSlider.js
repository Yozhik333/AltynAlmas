let mainTopSlider = new Swiper('.mainTopSlider .swiper-container', {
  slidesPerView: 'auto',
  spaceBetween: 2,
  navigation: {
    nextEl: '.mainTopSlider .btn-slide-next',
    prevEl: '.mainTopSlider .btn-slide-prev',
  },
  loop: true,
  speed: 400,
  on: {
    init: function () {
      let data = document.querySelector('.swiper-slide-active').getAttribute('data-title');
      let activeTitle = document.querySelector('.slide-title');
      activeTitle.innerText = data;
      // console.log(titleWrapWidth)
    },
  },
});


mainTopSlider.on('slideChangeTransitionStart', function () {
  let activeTitle = document.querySelector('.slide-title');
  activeTitle.style.opacity = '0';
});

mainTopSlider.on('slideChangeTransitionEnd', function () {
  let data = document.querySelector('.swiper-slide-active').getAttribute('data-title');
  let activeTitle = document.querySelector('.slide-title');
  activeTitle.innerText = data;
  activeTitle.style.opacity = '1'
});
