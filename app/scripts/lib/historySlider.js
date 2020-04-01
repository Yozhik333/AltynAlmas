const historySliderActive = document.querySelector('.historySlider');
const yearsDate = document.querySelector('.data-years');

if (historySliderActive) {
  const dataYear = document.querySelectorAll('.historySlider .swiper-slide');
  const temp = [...dataYear].map(item => item.getAttribute('data-year').trim());
  const years = temp.map((item, index) => `<div data-index="${index}" class="year-item" onclick="renderYears('${index}')">${item}</div>`).join('')
  yearsDate.innerHTML = years
  const historySlider = new Swiper('.historySlider .swiper-container', {
    spaceBetween: 35,
    slidesPerView: 3,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        console.log(index)
        return `<span class="${className}" > ${temp[index]} </span>`
      },
    },
    navigation: {
      nextEl: '.historySlider-button-next',
      prevEl: '.historySlider-button-prev',
    },
    on: {
      init: function () {
        setActive(0);
      },
    },
  });
  
  historySlider.on('slideChangeTransitionEnd', function () {
    setActive(this.activeIndex)
  });
  
  dataYear.forEach(item => {
    item.addEventListener('click', function () {
      const  changeData = item.getAttribute('data-year');
      const changeInfo =  item.querySelector('.historySlider__slide-description').textContent;
      const activeDataYear = document.querySelector('.active-slide__title');
      const activeInfo = document.querySelector('.active-slide__description');
      activeInfo.classList.add('red');
      activeDataYear.innerHTML = changeData;
      activeInfo.innerHTML = changeInfo;
    })
  })
  
  function setActive(index) {
    const allActi = document.querySelectorAll('.year-item');
    allActi.forEach(item => {
      item.classList.remove('active');
      const i = item.getAttribute('data-index');
      if (i == index) {
        item.classList.add('active')
      }
    })
  }
  
  window.renderYears = (index) => {
    historySlider.slideTo(index);
    setActive(index)
  }
}
