let menuButton = document.querySelector('.menu-toggle')
let menuDrop = document.querySelector('.menu')

menuButton.addEventListener('click', function () {
    menuButton.classList.add('toggle-active')
    menuDrop.classList.add('drop-active')
})

function item() {
    if(menuButton.className = 'toggle-active'){
    menuButton.classList.remove('toggle-active')
    menuDrop.classList.remove('drop-active')
}
}
