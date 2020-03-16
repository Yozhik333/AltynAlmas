let articleWrap = document.querySelector('.news-article-wrap');
let mainNewsSlider = new Swiper('.mainNewsSlider .swiper-container', {
  navigation: {
    nextEl: '.mainNewsSlider .btn-slide-next',
    prevEl: '.mainNewsSlider .btn-slide-prev',
  },
  loop: true,
  speed: 600,
  on: {
    init: function () {
      let title = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-title');
      let dataPublic = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-publication');
      let dataDesc = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-description');
      let activeTitle = document.querySelector('.article-title');
      let activeDataPublication = document.querySelector('.publication-date');
      let activeDesc = document.querySelector('.article-description');
      activeDataPublication.innerText = dataPublic;
      activeTitle.innerText = title;
      activeDesc.innerText = dataDesc;
    },
  },
});


mainNewsSlider.on('slideChangeTransitionStart', function () {
  // let activeTitle = document.querySelector('.article-title');
  articleWrap.style.opacity = '0';
});

mainNewsSlider.on('slideChangeTransitionEnd', function () {
  let title = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-title');
  let dataPublic = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-publication');
  let dataDesc = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-description');
  let activeTitle = document.querySelector('.article-title');
  let activeDataPublication = document.querySelector('.publication-date');
  let activeDesc = document.querySelector('.article-description');
  activeDataPublication.innerText = dataPublic;
  activeTitle.innerText = title;
  activeDesc.innerText = dataDesc;
  articleWrap.style.opacity = '1'
});
