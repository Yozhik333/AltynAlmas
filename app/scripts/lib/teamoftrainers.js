const trainerInfoShow = document.querySelector('.trainer__info')
const trainerPostShow = document.querySelector('.trainer__fio .post')
const trainerFioShow = document.querySelector('.trainer__fio .fio')
const getInfo = (context) =>{
  const getActiveSlide = context.$wrapperEl[0].querySelector('.swiper-slide-active')
  // console.log(getActiveSlide.dataset.trainerName, getActiveSlide.dataset.trainerInfo, getActiveSlide.dataset.trainerPost)
  trainerInfoShow.innerHTML = getActiveSlide.dataset.trainerInfo
  trainerPostShow.innerHTML = getActiveSlide.dataset.trainerPost
  trainerFioShow.innerHTML = getActiveSlide.dataset.trainerName
}


const galleryThumbs = new Swiper('.team-of-trainers-content .gallery-thumbs', {
  spaceBetween: 28,
  slidesPerView: 4,
  loop: true,
  freeMode: true,
  loopedSlides: 5, //looped slides should be the same
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
const galleryTop = new Swiper('.team-of-trainers-content .gallery-top', {
  spaceBetween: 10,
  loop: true,
  loopedSlides: 5, //looped slides should be the same
  navigation: {
    nextEl: '.team-of-trainers-content .btn-slide-next',
    prevEl: '.team-of-trainers-content .btn-slide-prev',
  },
  thumbs: {
    swiper: galleryThumbs,
  },
  on: {
    init: function () {
     getInfo(this)
  
      // trainerInfoShow.innerHTML = getActiveSlide.dataset.trainerInfo
    },
  },
});


galleryTop.on('slideChangeTransitionEnd', function (e) {
  // const getActiveSlide = this.$wrapperEl[0].querySelector('.swiper-slide-active')
  // console.log(getActiveSlide.dataset.trainerName, getActiveSlide.dataset.trainerInfo, getActiveSlide.dataset.trainerPost)
  //
  
  
  getInfo(this)
});


