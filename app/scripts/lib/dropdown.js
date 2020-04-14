// FOR DROPDOWN
const dropdownLink = document.querySelectorAll('.dropdownWrap');
dropdownLink.forEach(item => {
    item.addEventListener("mouseenter", function (event) {
        this.classList.add('dropdownShow')
    }, false);
    item.addEventListener("mouseleave", function (event) {
        this.classList.remove('dropdownShow')
    }, false);
})

let mobileMenu = document.querySelector('.mobile-menu ul')
mobileMenu.addEventListener('click', function (e) {
    const items = document.querySelectorAll('.toggle')
    const target = e.target
    Array.from(items).forEach(item => {
        item.classList.remove('active')
    })

    target.classList.add('active')
})

