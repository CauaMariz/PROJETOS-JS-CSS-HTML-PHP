
//Declaracao de VARs.
let campo = document.querySelector('#campo');
let cep = document.querySelector("#cep") ?? "";

//

function ExibirMensagem(mensagem) {
    campo.innerHTML = campo.classList.contains('Ver') ? mensagem : "";
}

//function asincrona.
async function VerCep() {

    //Verficacao se o input for undefined.
    if (cep.value === '') {
        ExibirMensagem("É necessário preencher o campo \"CEP\".");
        return;
    }
    //
    try {
        //Parte do URL.
        const url = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`);
        const urljson = await url.json();
        //

        //Verificaca caso a url seja veridica.
        if (url.ok && !urljson.erro) {

            //Exibicao do resultado.
            ExibirMensagem('Número do seu CEP: ' + '<b>' + cep.value + '</b>' + '<br>' + '. Rua: ' + '<b>' + JSON.stringify(urljson.logradouro) + '</b>' + '<br>' + '. Bairro: ' + '<b>' + JSON.stringify(urljson.bairro) + '</b>' + '<br>' + '. Cidade: ' + '<b>' + JSON.stringify(urljson.localidade) + '</b>' + '<br>' + '. Estado: ' + '<b>' + JSON.stringify(urljson.estado) + '</b>');
            //
        }
        //

        //Verificacao caso o input digitado esteja incorreto.
        else { ExibirMensagem("Talvez seu cep esteja errado:(");}
        //
    }

    //Uso do catch caso algo no codigo esteja incorreto.
    catch { ExibirMensagem("Ocorreu um erro ao buscar o CEP.");}
    //
}
//function onclick 
function Ver() {
    campo.classList.toggle('Ver');
    VerCep();
}
//
