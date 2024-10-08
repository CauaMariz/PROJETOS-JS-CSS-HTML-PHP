

let campo = document.querySelector('#campo');
let cep = document.querySelector("#CEP") ?? "";
let label = document.querySelector('label')

function ExibirMensagem(mensagem) {
  campo.innerHTML = campo.classList.contains('Ver') ? mensagem : "";
}


async function CodigoCEP() {

  const url = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`);
  const urljson = await url.json();

  if (url.ok && !urljson.erro) {

    label.innerHTML = ''

    ExibirMensagem('Número do seu CEP: ' + '<b>' + cep.value + '</b>' + '<br>' + '. Rua: ' + '<b>' + JSON.stringify(urljson.logradouro) + '</b>' + '<br>' + '. Bairro: ' + '<b>' + JSON.stringify(urljson.bairro) + '</b>' + '<br>' + '. Cidade: ' + '<b>' + JSON.stringify(urljson.localidade) + '</b>' + '<br>' + '. Estado: ' + '<b>' + JSON.stringify(urljson.estado) + '</b>');
  }
  else {
    campo.innerHTML = '';
    label.innerHTML = 'Talvez seu CEP esteja errado.';
  }
}

function validarCEP(cep) {
  const validacao = /^\d{8}$/;
  return validacao.test(cep);
}

function Ver() {
  if (!validarCEP(cep.value)) {
    campo.innerHTML = '';
    label.innerHTML = 'CEP inválido. Deve conter 8 dígitos numéricos.';
  } else {
    label.innerHTML = '';
    campo.classList.toggle('Ver');
    CodigoCEP();
  }
}
