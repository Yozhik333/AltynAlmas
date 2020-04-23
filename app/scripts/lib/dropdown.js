// FOR DROPDOWN
const dropdownLink = document.querySelectorAll('.dropdownWrap');
const closeDropdown = document.querySelectorAll('.close-dropdown')
const closeDropdownSecond = document.querySelectorAll('.close-dropdown_sec')
dropdownLink.forEach(item => {
    item.addEventListener("mouseenter", function (event) {
        this.classList.add('dropdownShow')
    }, false);
    item.addEventListener("mouseleave", function (event) {
        this.classList.remove('dropdownShow')
    }, false);
})

let mobileMenuToggle = document.querySelectorAll('.toggle')
const mobileMenu = document.querySelector('.mobile-menu');
const secondLevel = document.querySelectorAll('.mobile-menu__link_second')
Array.from(mobileMenuToggle).forEach(item => {
    item.addEventListener('click', () => {
        mobileMenu.classList.add('second-level')
        item.classList.add('active')
    })
})

Array.from(secondLevel).forEach(item => {
    item.addEventListener('click', () => {
        mobileMenu.classList.add('third-level')
        item.classList.add('active')
    })
})

Array.from(closeDropdown).forEach(itemClose => {
    itemClose.addEventListener('click', () => {
            if (mobileMenu.classList.contains('second-level')) {
                mobileMenu.classList.remove('second-level')
            }

            Array.from(mobileMenuToggle).forEach(item => {
                item.classList.remove('active')
            })
        }
    )
})

Array.from(closeDropdownSecond).forEach(item => {
    item.addEventListener('click', () => {
        if (mobileMenu.classList.contains('third-level')) {
            mobileMenu.classList.remove('third-level')
        }
    })
})


