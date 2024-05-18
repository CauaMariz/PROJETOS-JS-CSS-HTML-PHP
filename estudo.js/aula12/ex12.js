var a=new Date()
var hr=a.getHours()
if (hr<=12){
    console.log('Bom dia')
} else if (hr<=18){
    console.log('Boa tarde')
} else if (hr>18){
    console.log('Boa noite')
} else if (hr>0 || hr<5) {
    console.log('Boa madrugada')
}