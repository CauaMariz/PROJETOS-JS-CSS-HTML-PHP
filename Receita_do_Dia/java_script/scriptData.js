function Func(){
  let DataAtual=new Date();
  let inputData=new Date(document.querySelector('#DataNasc'))
  let DataNasc=DataAtual.getFullYear() - inputData.getFullYear();
  document.write(`Idade: ${DataAtual} ${inputData}`)
}