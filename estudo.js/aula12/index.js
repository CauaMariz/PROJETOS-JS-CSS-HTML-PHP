function hora(){
/*parte das VAR*/
var ft=document.getElementById('foto1')
var hr=document.getElementById('horadia')
var a=new Date()
var h=a.getHours()
var min=a.getMinutes()
var b=document.getElementById('bom')
var hr=document.getElementById('horadia')
/**/ 

/*Parte do style*/
hr.innerHTML=`Agora sao <strong>${h}</strong> Horas e ${min} minutos`
hr.style.left='850px'
hr.style.fontFamily='Normal'
bom.style.left='915px',bom.style.fontFamily='Arial',bom.style.fontWeight='600'
/**/ 

/*Parte do if*/
if (h>=0 && h<12) {
    bom.innerHTML='Bom dia'
    ft.src='file:///C:/Users/Uiliam/Downloads/Design%20sem%20nome.jpg'
} 
else if (h>12 && h<18){
    bom.innerHTML='Boa tarde'
    ft.src='file:///C:/Users/Uiliam/Downloads/pexels-george-desipris-858241.jpg'
}
else{
    bom.innerHTML='Boa noite'
    ft.src='file:///C:/Users/Uiliam/Downloads/pexels-pixabay-355465.jpg'
}}
/**/ 

/*Parte do botao recarregar*/
function recarregar(){
    var p=document.getElementById('recarregar')
    location.reload()
}
/**/ 
      