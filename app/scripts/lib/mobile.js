const triggerIcon = document.querySelector(".mobile-menu-icon");
const mobileMenuWrap = document.querySelector('.mobile-menu-wrap');
const BODY = document.querySelector('body');
triggerIcon.addEventListener('click', ()=>{
    triggerIcon.classList.toggle('active')
    mobileMenuWrap.classList.toggle('show')
    backdrop(this)
})

// BACKDROP
let highlight = false;
let cover = null;

function backdrop(element) {
    if (highlight == false) {
        /*Create a transparent cover for the viewport*/
        cover = document.createElement("div");
        cover.style.height = "100%";
        cover.style.width = "100%";
        cover.style.backgroundColor = "black";
        cover.style.opacity = "0.6";
        cover.style.position = "fixed";
        cover.style.top = "0px";
        cover.style.left = "0px";
        cover.style.zIndex = "1";
        document.body.appendChild(cover);
        highlight = true;
        BODY.classList.add('stop-scroll')
    } else {
        document.body.removeChild(cover);
        highlight = false;
        BODY.classList.remove('stop-scroll')
    }
}