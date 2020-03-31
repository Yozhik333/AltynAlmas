const searchHeadeIcon = document.querySelector('.search-header-icon');
const searchWrap = document.querySelector('.search-wrapper');

searchHeadeIcon.addEventListener('click', function () {
  if (searchWrap.classList.contains('show')) {
    searchWrap.classList.remove('show')
    backdrop(this)
  } else {
    searchWrap.classList.add('show')
    backdrop(this)
  }
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
  } else {
    document.body.removeChild(cover);
    highlight = false;
  }
}
