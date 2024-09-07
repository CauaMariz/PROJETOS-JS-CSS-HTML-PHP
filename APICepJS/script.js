let campo = document.querySelector("#campo");
let cepp = document.querySelector("#cep");

let x = false;

function cep() {
    if (!x) {
        let btn = document.createElement("button");
        btn.id = 'btn';
        btn.textContent = 'Ver Cep';

        document.body.appendChild(btn);

        if (cepp.value.length < 8 || cepp.value.length > 8) {

            campo.classList.add('Ver')
            campo.innerHTML = 'Digite um CEP de 8 caracteres'
            btn.textContent = 'Recarregar pagina'
            btn.addEventListener('click', () => {
                location.reload()
            })
        }
        else {

            btn.addEventListener('click', async () => {

                const url = await fetch(`https://viacep.com.br/ws/${cepp.value}/json/`);
                const urljson = await url.json();

                if (urljson.erro == 'true') {
                    if (campo.classList.contains("Close")) {
                        campo.classList.remove("Close");
                        campo.classList.add("Ver");

                        setTimeout(() => {
                            campo.innerHTML = 'Nao foi possivel localizar este CEP. Digite novamente.';
                        }, 330);
                    }

                    else {
                        campo.innerHTML = '';
                        setTimeout(() => {
                            campo.classList.remove("Ver");
                            campo.classList.add("Close");
                        }, 100);
                    }


                    btn.textContent = 'Recarregar página';
                    btn.addEventListener('click', () => {
                        location.reload();
                    });
                }

                else {
                    if (url.ok && !urljson.erro) {
                        if (campo.classList.contains("Close")) {
                            campo.classList.remove("Close");
                            campo.classList.add("Ver");

                            setTimeout(() => {
                                campo.innerHTML = 'Número do seu CEP: ' + '<b>' + cepp.value + '</b>' + '<br>' + '. Rua: ' + '<b>' + JSON.stringify(urljson.logradouro) + '</b>' + '<br>' + '. Bairro: ' + '<b>' + JSON.stringify(urljson.bairro) + '</b>' + '<br>' + '. Cidade: ' + '<b>' + JSON.stringify(urljson.localidade) + '</b>' + '<br>' + '. Estado: ' + '<b>' + JSON.stringify(urljson.estado) + '</b>';
                            }, 330);
                        }

                        else {
                            campo.innerHTML = '';
                            setTimeout(() => {
                                campo.classList.remove("Ver");
                                campo.classList.add("Close");
                            }, 100);
                        }
                    }

                }
            });

        }
        x = true;
    }
}
