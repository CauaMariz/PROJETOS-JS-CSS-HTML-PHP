add=false
function ver(){
    if (!add){
        let menu=document.createElement('div')
        let remove=document.createElement('button')
        
        remove.textContent='remover'
        menu.style.height='100px'
        menu.style.backgroundColor='black'
        remove.addEventListener('click',()=>{
            menu.remove()
            remove.remove()
            add=false
        })
        document.body.appendChild(remove)
        document.body.appendChild(menu)
        add=true
    } 
    
}
    