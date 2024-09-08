async function See() {
  try {
    let campo = document.querySelector("#campo")
    campo.classList.toggle('Exibir')

    let urlawait = await fetch('https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL')
    let urljson = await urlawait.json()


    if (urlawait.ok) {
      if (campo.classList.contains('Exibir')) {
        campo.style.width = '300px'
        campo.style.height = '100px'
        campo.style.transition = '0.6s'
        campo.style.backgroundColor = 'rgb(190, 190, 190)'
        campo.style.borderRadius = '10px'
        campo.style.padding='10px 0 0 10px'
        campo.style.color='white'
        campo.style.fontSize='17px'
        campo.style.marginTop='2vh'
        campo.style.fontFamily='system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-seri'
        campo.style.marginLeft='1%'
        campo.style.fontWeight='600'

      setTimeout(()=>{
          campo.innerHTML = "1 Dolar em real: " + 'R$' + JSON.stringify(urljson.USDBRL.high)
        },400)
      }
      else {
        campo.innerHTML = ''
        campo.style.width = '0'
        campo.style.height = '0'
        campo.style.transition = '0.6s'
        campo.style.padding='0'
      }
    }
  }

  catch (erro) {
    document.write(erro)
  }
}