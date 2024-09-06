let campo = document.querySelector("#campo")

let cepp = document.querySelector("#cep")

x = false
function cep() {

    let btn = document.createElement("button")
    btn.id = 'btn'
    btn.textContent = 'Ver Cep'

    if (!x) {

        document.body.appendChild(btn)

        btn.addEventListener('click', async () => {

            const url = await fetch('https://viacep.com.br/ws/05576100/json/')
            const urljson = await url.json()

            if (url.ok) {

                if (campo.classList.contains("Close")) {

                    campo.classList.remove("Close")
                    campo.classList.add("Ver")

                    setTimeout(() => {
                        campo.innerHTML = 'Nome  do seu Cep: ' + cepp.value + JSON.stringify(urljson.logradouro)
                    }, 330)
                }
                else {
                    campo.innerHTML = ''
                    setTimeout(() => {
                        campo.classList.remove("Ver")
                        campo.classList.add("Close")
                    }, 100)
                }

            }
        }

        )

        x = true
    }
}

