const triggerIcon = document.querySelector(".mobile-menu-icon");
const mobileMenuWrap = document.querySelector('.mobile-menu-wrap')
triggerIcon.addEventListener('click', ()=>{
    triggerIcon.classList.toggle('active')
    mobileMenuWrap.classList.toggle('show')
})