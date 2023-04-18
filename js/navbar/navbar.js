const openMenu = document.getElementById("menu")
const closeMenu = document.getElementById("close")
const menu = document.getElementById("menu--items")

openMenu.addEventListener("click", function () {
    openMenu.style.display = "none"
    closeMenu.style.display = "block"
    menu.style.display = "block"
})

closeMenu.addEventListener("click", function () {
    openMenu.style.display = "block"
    closeMenu.style.display = "none"
    menu.style.display = "none"
})

