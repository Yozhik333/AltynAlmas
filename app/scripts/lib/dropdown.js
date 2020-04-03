// FOR DROPDOWN
const dropdownLink = document.querySelectorAll('.dropdownWrap');
const test = document.querySelectorAll('.dropdownWrap > .link')
dropdownLink.forEach(item => {
  item.addEventListener("mouseenter", function (event) {
    this.classList.add('dropdownShow')
    // backToMainMenu.style.display = "flex";
    // backToMainMenu.addEventListener('click', function () {
    //   this.classList.remove('dropdownShow')
    // })
  }, false);
  item.addEventListener("mouseleave", function (event) {
    this.classList.remove('dropdownShow')
    // backToMainMenu.style.display = "none";
  }, false);
})

let prevDev = document.querySelectorAll('.prevDev')

let mediaQuery = x => {
  if (x.matches) {
    prevDev.forEach(item => {
      item.addEventListener('click', function (event) {
        event.preventDefault();
      })
    })
  }
}

let x = window.matchMedia("(max-width: 992px)")
mediaQuery(x)
x.addListener(mediaQuery)

console.log(test)
