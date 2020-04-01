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
  loop:true,
  loopedSlides: 5, //looped slides should be the same
  navigation: {
    nextEl: '.team-of-trainers-content .btn-slide-next',
    prevEl: '.team-of-trainers-content .btn-slide-prev',
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});
