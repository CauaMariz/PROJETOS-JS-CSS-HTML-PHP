
//OTIMIZAR TODO O CODIGO
let cep = document.querySelector("#cep")
async function VerCep() {


    if (cep.value == '') {
        document.write("Algo nao esta certo")
    }

    else {
        try {

            const url = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`)
            const urljson = await url.json()

            if (url.ok && !urljson.erro) {
                document.write(JSON.stringify(urljson))
            }
            else {
                document.write("Talvez seu cep esteja errado:(")
            }
        }
        catch (erro) {
            document.write("Talvez seu cep esteja errado:(")
        }
    }
}
function Ver() {
    VerCep()
}