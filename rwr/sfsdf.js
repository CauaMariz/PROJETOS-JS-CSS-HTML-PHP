let botao=false
let bt1,bt2,bt3
{
    const loja1={
        loja1:{
            fabricantes:['Fiat','Porshe','Koenigsegg'],
            modelos:['Uno','Porshe GT 911','Koenigsegg ONE'],
            precos:['R$ 15000','R$ 850000','R$ 3500000']}}

    function clicar(){
    
    if (!botao){
    
    campo=document.createElement('div')
    campo.id='campo'

    campo.style.position='absolute'
    campo.style.top='200px'
    campo.style.left='10px' 
    campo.style.backgroundColor='grey'   
    campo.style.color='white'
    campo.style.borderRadius='6px'

    bt1=document.createElement('button')
    bt2=document.createElement('button')
    bt3=document.createElement('button')
    bt1.textContent='Ver fabricantes'
    bt2.textContent='Ver modelos'
    bt3.textContent='Ver precos'

    bt1.addEventListener('click', function(){
        campo.innerHTML=loja1.loja1.fabricantes.join(', ')
        campo.style.padding='7px'
        
    })
    bt2.addEventListener('click', function(){
        campo.innerHTML=loja1.loja1.modelos.join(', ')
        campo.style.padding='7px'
    })
    bt3.addEventListener('click',function(){
        campo.innerHTML=loja1.loja1.precos.join(', ')
        campo.style.padding='7px'
    })
    document.body.appendChild(campo)
    document.body.appendChild(bt1)
    document.body.appendChild(bt2)
    document.body.appendChild(bt3)
    botao=true
    
    
} else{
    
    bt1.remove()
    bt2.remove()
    bt3.remove()
    campo.remove()
    bt1=null
    bt2=null
    bt3=null
    campo=null
    botao=false
    
}
} 
}
