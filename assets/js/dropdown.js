let menuButton = document.querySelector('.menu-toggle')
let menuDrop = document.querySelector('.menu')

menuButton.addEventListener('click', function () {
    menuButton.classList.toggle('toggle-active')
    menuDrop.classList.toggle('drop-active')
})