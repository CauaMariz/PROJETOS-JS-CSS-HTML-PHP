async function See() {
  try {
    let campo = document.querySelector("#campo");


    let urlawait = await fetch('https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL');
    let urljson = await urlawait.json();
    let dolar = parseFloat(urljson.USDBRL.high);
    let real = document.querySelector('#real').value;
    let conversao = (real / dolar).toFixed(2);

    if (!real && !campo.classList.contains('Exibir')) {
      return;
    }

    if (urlawait.ok) {
      campo.classList.toggle('Exibir');
      if (campo.classList.contains('Exibir')) {
        
        setTimeout(() => {
          campo.innerHTML = `R$${real} em ${dolar.toFixed(2)} sao: U$$${conversao}`;
        }, 400)

      }
      else {
        campo.innerHTML = '';
      }
    }
  }

  catch  {
    campo.innerHTML = "Algo nao está certo";
  }
}
