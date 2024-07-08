let buttonMenu = document.getElementById('button-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')
const backToTopButton = document.querySelector('.back-to-top')

buttonMenu.addEventListener('click', () => (menu.classList.add('abrir-menu')))

menu.addEventListener('click', () => (menu.classList.remove('abrir-menu')))

overlay.addEventListener('click', () => (menu.classList.remove('abrir-menu')))

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

const backToTop = () => {
    if (window.scrollY >= 100) {
        backToTopButton.classList.add('show')
    } else {
        backToTopButton.classList.remove('show')
    }
}

window.addEventListener('scroll', function () {
    backToTop()
})