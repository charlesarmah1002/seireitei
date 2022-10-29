let menuButton = document.querySelector('.menu-toggle')
let menuDrop = document.querySelector('.menu')

menuButton.addEventListener('click', function () {
    menuButton.classList.add('toggle-active')
    menuDrop.classList.add('drop-active')
})

menuButton.addEventListener('click', function() {
    if(menuButton.className = 'toggle-active'){
        menubutt
    }
})

let menuItem = document.querySelector('.menu-item')

menuItem.addEventListener('click', function() {
    menuButton.classList.remove('toggle-active')
    menuDrop.classList.remove('drop-active')
    window.alert('this button was clicked')
})