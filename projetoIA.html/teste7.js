//Na linha um, declaramos const, abrimos chaves e comecamos a atribuir valores as chaves. primeiroNome(é uma chave):'john'(é o valor da chave). Na linha 6, a chave recebe (:) function, onde no bloco retorna primeiroNome, mas antes tem que vir this, onde 'this' se refere ao valor de primeiroNome que é John. Seria o mesmo que usar pessoa.primeiroNome
/*const pessoa = {
  primeiroNome: "John",
  ultimoNome : "Doe",
  id       : 5566,
  nomeInteiro : function() {
    return this.primeiroNome + " " + this.ultimoNome;
  }
}
console.log(pessoa.nomeInteiro())
*/
  
  function Conversar(){
  let nomeMenina=document.getElementById('nomedaMenina').value 
  let campo = document.getElementById('campo');

    if(nomeMenina===''){
      alert('Escreva algo')
      campo.innerHTML=''
    }  
    else{
      let falar={
        meninoFala:'Olá, prazer em te conhecer,', 
        nomeMenina: nomeMenina,
    
        falas: function(){
          return this.meninoFala + ' ' + this.nomeMenina + '.'
        }
      }
      campo.innerHTML = falar.falas();
      campo.style.transition='color 0.45s'
      campo.style.fontFamily='Gill Sans, Gill Sans MT, Calibri, Trebuchet MS, sans-serif'
      campo.style.marginBottom='10px'

      campo.onmousemove=function (){
        this.style.color='white'
      }
      campo.onmouseout=function (){
        this.style.color='black'
      }

    }
  }
function Limpar(){
  campo.innerHTML=''
  document.getElementById('nomedaMenina').value=''
}
