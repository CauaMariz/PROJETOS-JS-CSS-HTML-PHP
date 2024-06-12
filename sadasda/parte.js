function enviar(){
    let nome=document.getElementById('nome').value
    let idade=Number(document.getElementById('idade').value)
    let pais=document.getElementById('pais').value
    let estado=document.getElementById('estado').value
    let campo=document.getElementById('campo')
  
    if (nome.length>60){
      alert('Nome grande demais. Insira novamente')
      document.getElementById('nome').value=''
    } else if(idade>200 || idade<18 && idade>0){
      alert('Idade muito alta ou baixa demais. Insira novamente')
      document.getElementById('idade').value=''
    }
    else if (nome.length==0 || idade==0 || pais.length==0 || estado.length==0){
      alert('Certifica-se que todos os campos estao completos')
    }
    else{
      let dados ="Nome: " +'<strong>'+ nome +'</strong>' + "<br>";
      dados += "Idade: "  +'<strong>'+ idade +'</strong>' + "<br>";
      dados += "País: "   +'<strong>'+ pais +'</strong>'+ "<br>";
      dados += "Estado: " +'<strong>'+ estado +'</strong>'+ "<br>";
      campo.innerHTML = dados;
      campo.style.position='relative'
      campo.style.top='-358px'
      campo.style.left='400px'
      campo.style.width='320px'
      campo.style.height='298px'
      campo.style.display='block'
      campo.style.boxShadow='1px 1px 6px 1px rgba(0, 0, 0, 0.568)'
      campo.style.borderRadius='5px'
      campo.style.paddingLeft='20px'
      campo.style.paddingTop='20px'
      campo.style.display='block'
      campo.style.marginBottom='20px'
      campo.style.fontFamily='system-ui, -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif'
      campo.style.fontSize='large'
  
      let button = document.createElement('button');
      button.textContent = 'Fechar';
      button.classList.add('fechar-btn');
      button.addEventListener('click', function() {
          campo.style.display = 'none';
      });
      campo.appendChild(button);    
      button.style.border='none'
      button.style.borderRadius='5px'
      button.style.cursor='Pointer'
  }
      
  }
  function limpardados(){
    let nome=document.getElementById('nome').value=''
    let idade=Number(document.getElementById('idade').value='')
    let pais=document.getElementById('pais').value=''
    let estado=document.getElementById('estado').value=''
  }