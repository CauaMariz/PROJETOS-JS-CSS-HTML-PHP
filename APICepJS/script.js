
//OTIMIZAR TODO O CODIGO

let campo = document.querySelector('#campo')
let cep = document.querySelector("#cep")
async function VerCep() {


    if (cep.value == '') {
        if (campo.classList.contains('Ver')) {
            campo.innerHTML = 'É necessario preencher o campo "CEP"'
        }
        else { campo.innerHTML = '' }
    }

    else {
        try {

            const url = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`)
            const urljson = await url.json()

            if (url.ok && !urljson.erro) {
                if (campo.classList.contains('Ver')) {
                   campo.innerHTML = 'Número do seu CEP: ' + '<b>' + cep.value + '</b>' + '<br>' + '. Rua: ' + '<b>' + JSON.stringify(urljson.logradouro) + '</b>' + '<br>' + '. Bairro: ' + '<b>' + JSON.stringify(urljson.bairro) + '</b>' + '<br>' + '. Cidade: ' + '<b>' + JSON.stringify(urljson.localidade) + '</b>' + '<br>' + '. Estado: ' + '<b>' + JSON.stringify(urljson.estado) + '</b>';
                }

                else { campo.innerHTML = '' }
            }

            else {
                if (campo.classList.contains('Ver')) {
                    campo.innerHTML = "Talvez seu cep esteja errado:("
                }
                else { campo.innerHTML = '' }
            }
        }

        catch (erro) {
            if (campo.classList.contains('Ver')) {
                campo.innerHTML = "Talvez seu cep esteja errado:("
            }
            else { campo.innerHTML = '' }
        }

    }
}
function Ver() {
    campo.classList.toggle('Ver')
    VerCep()
}
