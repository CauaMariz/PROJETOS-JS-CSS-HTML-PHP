let menu = document.querySelector(".menu");
let btnMenu = document.querySelector(".btnMenu");
function showMenu() {
  if (menu.classList.contains("exclMenu")) {
    menu.classList.add("showMenu")
    menu.classList.remove("exclMenu")
    
  }
  else {
    menu.classList.add("exclMenu")
    menu.classList.remove("showMenu")
  }
}

