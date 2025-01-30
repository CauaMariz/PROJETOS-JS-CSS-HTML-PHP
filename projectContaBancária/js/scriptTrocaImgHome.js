let contador=1;

setInterval(()=>{

  document.querySelector("#radio-" + contador).checked = true
  contador ++;
  
  if(contador > 3){
    contador = 1;
  }

},5000)