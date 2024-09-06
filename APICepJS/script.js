async function Func(){
    const url=await fetch('https://viacep.com.br/ws/05576100/json/')
    const urljson=await url.json()
    let campo=document.querySelector("#campo")

    if (url.ok){

        if (campo.classList.contains("Close")){
            campo.classList.remove("Close")
            campo.classList.add("Ver")

            setTimeout(()=>{
                campo.innerHTML='Nome  da rua: '+ JSON.stringify(urljson.logradouro)
            },330)
        }
        else{
            campo.innerHTML=''
            setTimeout(()=>{
                campo.classList.remove("Ver")
                campo.classList.add("Close")
            },100)
        }
      
    }
}