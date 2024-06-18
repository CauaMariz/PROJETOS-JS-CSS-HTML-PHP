function vermenu(){
    let menu=document.querySelector('#menuu')
    
    if (menu.classList.contains('remove')){
        menu.classList.add('add')
        menu.classList.remove('remove')
        menu.innerHTML='<a href="home.html" style="width: 60px; padding-right: 60px">Home</a>' + 
        '<a href="login.html" style="width: 55px; padding-right: 55px">Login</a>' +
        '<a href="configuracoes.html" style="width: 130px; padding-right: 134px">Configuracoes</a>' 
        
    } else{
        menu.classList.add('remove')
        menu.classList.remove('add')
        menu.innerHTML=''
    }
}