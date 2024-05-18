    
function fundo(){
    var fundo=document.getElementById('fundoa')
    var ndat=new Date().toLocaleTimeString("pt-BR",{timeZone:"America/Sao_Paulo"})
    fundo.innerHTML=`${ndat}`
}
setInterval(fundo, 1000);
