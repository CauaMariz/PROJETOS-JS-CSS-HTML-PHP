//Verificacoes
SeeNt=false
let Text=''
let Campo
let limpar=false
let btver=false
//
function save(){
  
  if(!Campo && !limpar && !btver){
    //variaveis
    let Text=document.querySelector('#TextArea').value
    let BtnSee=document.createElement('button')
    let Limp=document.createElement('button')
    let Mens=document.createElement('div')
    
    //
    //Add ID
    BtnSee.id='btn-ver'
    Mens.id='mens'
    Limp.id='limp'

    //text content
    Limp.textContent='Limpar Conteudo'
    BtnSee.textContent='Ver Notas'
    Mens.textContent='Só será possivel adicionar uma nota por vez.'
    //

    //Styles
    Mens.style.marginBottom='30px'
    BtnSee.style.border='none'
    Limp.style.border='none'

    BtnSee.style.cursor='pointer'
    Limp.style.cursor='pointer'

    BtnSee.style.marginRight='10px'
    Limp.style.marginRight='10px'

    BtnSee.style.marginBottom='10px'
    Limp.style.marginBottom='10px'

    BtnSee.style.borderRadius='6px'
    Limp.style.borderRadius='6px'

    BtnSee.style.backgroundColor='rgb(77, 160, 88)'
    Limp.style.backgroundColor='rgb(77, 160, 88)'

    BtnSee.style.color='white'
    Limp.style.color='white'

    BtnSee.style.display='flex'
    Limp.style.display='flex'

    BtnSee.style.margin='0 auto'
    Limp.style.margin='0 auto'

    BtnSee.style.marginTop='3%'
    Limp.style.marginTop='1%'

    BtnSee.style.boxShadow='1px 1px 5px 1px rgb(82, 82, 82)'
    Limp.style.boxShadow='1px 1px 5px 1px rgb(82, 82, 82)'
   
    BtnSee.style.padding='5px'
    Limp.style.padding='5px'

    Mens.style.fontFamily='Arial'
    Mens.style.position='absolute'
    Mens.style.top='2%'
    Mens.style.left='1%'
    Mens.style.fontSize='1.2em'
    Mens.style.backgroundColor='rgba(189, 189, 189, 0.281)'
    Mens.style.padding='6px'
    Mens.style.borderRadius='6px'
    Mens.style.border='2px  solid  white'
    //

    //Style com Event
    BtnSee.addEventListener('mousemove',()=>{
      BtnSee.style.transition='0.8s'
      BtnSee.style.backgroundColor='rgb(50, 200, 100)'
    })
    BtnSee.addEventListener('mouseout',()=>{
      BtnSee.style.transition='0.8s'
      BtnSee.style.backgroundColor='rgb(77, 160, 88)'
    })
    Limp.addEventListener('mousemove',()=>{
      Limp.style.transition='0.8s'
      Limp.style.backgroundColor='rgb(50, 200, 100)'
    })
    Limp.addEventListener('mouseout',()=>{
      Limp.style.transition='0.8s'
      Limp.style.backgroundColor='rgb(77, 160, 88)'
    })
    //

    //Add os elements
    document.body.appendChild(BtnSee)
    document.body.appendChild(Limp)
    document.body.appendChild(Mens)
    //

    //Condition
    if (Text==''){
      Mens.innerHTML='Digite um texto para ver o resultado'
    } 
    //

    //Event do button ver
    BtnSee.addEventListener('click',function(){
      if (!Campo){
        Campo=document.createElement('div')
        document.body.appendChild(Campo)

        //Styles do button
        Campo.style.height='300px'
        Campo.style.width='300px'
        Campo.style.backgroundColor='rgb(236, 233, 217)'
        Campo.style.paddingLeft='10px'
        Campo.style.paddingTop='10px'
        Campo.style.borderRadius='10px'
        Campo.innerHTML='Sua nota: '+Text 
        Campo.style.fontFamily='Arial'
        Campo.style.position='absolute'
        Campo.style.top='8%'
        Campo.style.boxShadow='1px 1px 7px 1px rgb(105, 105, 105)'
        Campo.style.marginLeft='15%'
        //

        //Condition do button
        if(Text.length>26){
        Campo.style.paddingRight='10px'
        Campo.style.wordBreak = 'break-word'
        Campo.style.whiteSpace = 'normal'
        //
        }
      }
    })
    //

    //Event do button limpar
    Limp.addEventListener('click',()=>{
      document.querySelector('#TextArea').value=''

      BtnSee.remove()
      Limp.remove()
      Mens.remove()
      
      //Remove Campo
      if (Campo){
        Campo.remove()
        Campo=null
      }
      //

      //Elements recebem false
      SeeNt=false
      btver=false
      limpar=false
      //

    })

    //Elements recebem true
    SeeNt=true
    btver=true
    limpar=true
    //

  }}