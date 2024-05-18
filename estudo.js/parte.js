function verificar() {
    /*PARTE VAR*/
    var anonas = Number(document.getElementById('anonasc').value);
    var botao = document.getElementById('botao1');
    var sxm = document.getElementById('sexom');
    var sxf = document.getElementById('sexof');
    var res = document.getElementById('resposta');
    var ft = document.createElement('img');
    ft.setAttribute('id', 'foto1');
    /**/
    /*PARTE DOS IFs*/
    if (anonas < 2006 && anonas > 1980) {
        ft.setAttribute('src', 'C:/Users/Uiliam/Downloads/pexels-vinicius-wiesehofer-289347-1130626.jpg');
        res.appendChild(ft);
    /*PARTE STYLE*/
        ft.style.position='absolute' 
        ft.style.left='240px'
        ft.style.top='140px'
    /**/
    
    } else{
    res.innerHTML='Voce nao é adulto'
    }
     /**/
    /*PARTE FUNCTION RELOAD*/
    }
function recarregar(){
  var bt=document.getElementById('recarregar')
  location.reload()
}
/**/