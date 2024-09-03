function btn() {
    let menu = document.querySelector(".menu")

    menu.classList.toggle("Ver")


    if (menu.classList.contains("Ver")) {
        menu.innerHTML = '<a href="test.html" class="Linkhome">Home</a>'
    }
    else {
     
        menu.innerHTML = ""
    }
}