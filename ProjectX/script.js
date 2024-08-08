
const nome = document.querySelector('#name')
const log = document.querySelector('#log')
const idade = document.querySelector('#age')
let campo = document.querySelector('#campo')

let x = false


function See() {

    class MainDados {
        constructor(nomme, logg, idadee) {
            this.nomme = nome.value
            this.logg = log.value
            this.idadee = idade.value
        }
        Name() {
            campo.innerHTML = (`Nome: ${this.nomme} <br>`)
        }
        Log() {
            campo.innerHTML = (`Logradouro: ${this.logg} <br>`)
        }
        Idade() {
            campo.innerHTML = (`Idade: ${this.idadee} <br>`)
        }
        All() {
            campo.innerHTML = (`
                Nome: <strong> ${this.nomme} </strong> <br> 
                Logradouro: <strong> ${this.logg} </strong> <br>
                Idade: <strong> ${this.idadee} </strong>
                `)

            if (!x) {
                //Button 1

                let btn = document.createElement('button')
                btn.textContent = 'Ver Nome'
                btn.addEventListener('click', () => {
                    campo.innerHTML = ''
                    campo.innerHTML = (`Nome: ${this.nomme}`)
                })

                document.body.appendChild(btn)

                //

                //Button 2
                if (!document.querySelector('#btn')) {
                    let btn2 = document.createElement('button')
                    btn2.textContent = 'Ver Logradouro'

                    btn2.addEventListener('click', () => {
                        campo.innerHTML = ''
                        campo.innerHTML = (`Logradouro: ${this.logg}`)
                    })


                    document.body.appendChild(btn2)
                }
                //

                //Button 3
                if (!document.querySelector('#btn2')) {
                    let btn3 = document.createElement('button')
                    btn3.textContent = 'Ver Idade'

                    btn3.addEventListener('click', () => {
                        campo.innerHTML = ''
                        campo.innerHTML = (`Idade: ${this.idadee}`)
                    })

                    document.body.appendChild(btn3)
                }
            }
            x = true
            return x
        }
        //
    }

    let dados = new MainDados(nome, log, idade)

    dados.All()
}

