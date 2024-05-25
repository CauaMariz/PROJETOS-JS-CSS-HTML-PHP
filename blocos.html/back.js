function enviar(){
    var email=document.getElementById('email').value
    var senha=document.getElementById('senha').value
    if (email.length<8 && email.length>0){
        alert('O email tem que ser maior ou igual a 8 caracteres')
        location.reload()
    }
    if (senha.length<8 && senha.length>0){
        alert('A senha tem que ser maior ou igual a 8 caracteres')
        location.reload()
    }
}