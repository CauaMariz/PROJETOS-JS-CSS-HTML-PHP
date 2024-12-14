function MudarIconSalvarBarraLateral1() {
  let IconSalvar = document.querySelector('#IconSalvar1');
  IconSalvar.classList.toggle('MudaIconSalvar');
}
function MudarIconSalvarBarraLateral2() {
  let IconSalvar = document.querySelector('#IconSalvar2');
  IconSalvar.classList.toggle('MudaIconSalvar')
}

let contador=1;

setInterval(()=>{

  document.querySelector("#radio-" + contador).checked = true
  contador ++;

  if(contador > 3){
    contador = 1;
  }

},3000)