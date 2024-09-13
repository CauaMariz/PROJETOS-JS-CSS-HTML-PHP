
//Declaracao de VARs.
let campo = document.querySelector('#campo')
let cep = document.querySelector("#cep")
//

//function asincrona.
async function VerCep() {

    //Verficacao se o input for undefined.
    if (cep.value == '') {
        if (campo.classList.contains('Ver')) {
            campo.innerHTML = 'É necessario preencher o campo "CEP"'
        }
        else { campo.innerHTML = '' }
    }
    //

    else {
        try {

            //Parte do URL.
            const url = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`)
            const urljson = await url.json()
            //

            //Verificaca caso a url seja veridica.
            if (url.ok && !urljson.erro) {

                if (campo.classList.contains('Ver')) {
                    //Exibicao do resultado.
                    campo.innerHTML = 'Número do seu CEP: ' + '<b>' + cep.value + '</b>' + '<br>' + '. Rua: ' + '<b>' + JSON.stringify(urljson.logradouro) + '</b>' + '<br>' + '. Bairro: ' + '<b>' + JSON.stringify(urljson.bairro) + '</b>' + '<br>' + '. Cidade: ' + '<b>' + JSON.stringify(urljson.localidade) + '</b>' + '<br>' + '. Estado: ' + '<b>' + JSON.stringify(urljson.estado) + '</b>';
                    //
                }

                else { campo.innerHTML = '' }
            }
            //

            //Verificacao caso o input digitado esteja incorreto.
            else {
                if (campo.classList.contains('Ver')) {
                    campo.innerHTML = "Talvez seu cep esteja errado:("
                }
                else { campo.innerHTML = '' }
            }
            //
        }

        //Uso do catch caso algo no codigo esteja incorreto.
        catch (erro) {
            if (campo.classList.contains('Ver')) {
                campo.innerHTML = "Talvez seu cep esteja errado:("
            }
            else { campo.innerHTML = '' }
        }
        //
    }
}
//function onclick 
function Ver() {
    campo.classList.toggle('Ver')
    //Chama toda a function VerCep(), onde há o codigo principal.
    VerCep()
    //
}
//
