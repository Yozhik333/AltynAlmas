let indexPage = document.querySelector('.indexSlider');

let mainTopSlider = new Swiper('.mainTopSlider-active .swiper-container', {
  slidesPerView: 'auto',
  spaceBetween: 2,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.mainTopSlider-active .btn-slide-next',
    prevEl: '.mainTopSlider-active .btn-slide-prev',
  },
  loop: true,
  speed: 2100,
});

if (indexPage) {
  let mainTopSlider = new Swiper('.mainTopSlider-active .swiper-container', {
    on: {
      init: function () {
        let data = document.querySelector('.swiper-slide-active').getAttribute('data-title');
        let activeTitle = document.querySelector('.slide-title');
        activeTitle.innerText = data;
      },
    },
    slidesPerView: 'auto',
    spaceBetween: 2,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.mainTopSlider-active .btn-slide-next',
      prevEl: '.mainTopSlider-active .btn-slide-prev',
    },
    loop: true,
    speed: 2100,
  })
  
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
}
