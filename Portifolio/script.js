function Fechar() {
  let BarraLateral = document.querySelector(".BarraLateral")
  let btn = document.querySelector(".btn")

  BarraLateral.style.transition = '0.6s'
  BarraLateral.classList.toggle("Close")

  if (BarraLateral.classList.contains("Close")) {
    btn.innerHTML = '<img src="imgs/icons8-menu-30.png" alt="" class="MenuBtn">'
    BarraLateral.innerHTML = ''
  }
  else {
    btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/></svg>'

    BarraLateral.innerHTML = ' <span>Veja também</span><a href="https://www.linkedin.com/in/caua-mariz-254b8731a/" target="_blank"><img src="imgs/icons8-linkedin-48.png" alt=""></a><a href="https://github.com/CauaMariz" target="_blank"><img src="imgs/icons8-github-50.png" alt=""></a><a href="https://www.instagram.com/cmarizzzz/?igsh=eTk1MzdvZm83M2Nr" target="_blank"><img src="imgs/icons8-instagram-48.png" alt=""></a><h2>Projetos</h2><a href="https://github.com/CauaMariz/PROJETOS-JS-CSS-HTML-PHP/tree/1c1e691306cd985ff0d47743cc19379e1d3c64d7/calculadora" target="_blank"><img src="imgs/icons8-calculadora-de-maçã-48.png" alt=""></a>'
  }
}
