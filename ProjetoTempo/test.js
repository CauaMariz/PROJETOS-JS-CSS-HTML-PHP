
let campo = document.querySelector('#campo')
let x = false
async function tempo() {
    try {
        const url = await fetch('http://api.weatherapi.com/v1/current.json?key=055b0e7a30f3463fa18142639241308&q=Sao Paulo&aqi=yes')

        const ver = await url.json()


        if (!x) {
            if (url.ok) {
                const temperatura = ver.current.temp_c;
                const hora = ver.location.localtime;
                const vento = ver.current.wind_mph;
                campo.innerHTML = ('Temperatura atual: ' + temperatura + 'C ' + '<br>' + 'Hora atual: ' + hora + '<br>' + 'Velocidade do vento em MPH: ' + vento + 'MPH' )
                let btn = document.createElement('button')
                btn.textContent = 'Recarregar'
                btn.addEventListener('click', () => {
                    location.reload()
                })
                document.body.appendChild(btn)

            }

        }
        x = true
        return x
    }
    catch (error) {
        campo.innerHTML = (error)
    }
}
