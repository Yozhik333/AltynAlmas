// FOR DROPDOWN
let dropdownLink = document.querySelectorAll('.dropdownWrap');
// let backToMainMenu = document.querySelector('.btn-back-to-main-menu');
// backToMainMenu.style.display = "none";
dropdownLink.forEach(item => {
  item.addEventListener("mouseenter", function (event) {
    this.classList.add('dropdownShow')
    // backToMainMenu.style.display = "flex";
    // backToMainMenu.addEventListener('click', function () {
    //   this.classList.remove('dropdownShow')
    // })
    console.log(1);
  }, false);
  item.addEventListener("mouseleave", function (event) {
    this.classList.remove('dropdownShow')
    // backToMainMenu.style.display = "none";
    console.log(-1);
  }, false);
})
