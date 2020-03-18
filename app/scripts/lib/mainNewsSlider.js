const articleWrap = document.querySelector('.news-article-wrap');

const activeInfo = () => {
  const title = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-title');
  const dataPublic = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-publication');
  const dataDesc = document.querySelector('.mainNewsSlider .swiper-slide-active').getAttribute('data-description');
  const activeTitle = document.querySelector('.article-title');
  const activeDataPublication = document.querySelector('.publication-date');
  const activeDesc = document.querySelector('.article-description');
  activeDataPublication.innerText = dataPublic;
  activeTitle.innerText = title;
  activeDesc.innerText = dataDesc;
}
const mainNewsSlider = new Swiper('.mainNewsSlider .swiper-container', {
  navigation: {
    nextEl: '.mainNewsSlider .btn-slide-next',
    prevEl: '.mainNewsSlider .btn-slide-prev',
  },
  loop: true,
  speed: 600,
  on: {
    init: function () {
      activeInfo();
    },
  },
});


mainNewsSlider.on('slideChangeTransitionStart', function () {
  articleWrap.style.opacity = '0';
});

mainNewsSlider.on('slideChangeTransitionEnd', function () {
  activeInfo();
  articleWrap.style.opacity = '1'
});
