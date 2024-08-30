
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

                campo.style.fontFamily = 'Arial'
                campo.style.maxWidth = '260px'
                campo.style.backgroundColor = 'rgb(34, 126, 34)'
                campo.style.color = 'white'
                campo.style.fontSize = '20px'
                campo.style.padding = '20px'
                campo.style.borderRadius = '10px'
                campo.style.lineHeight = '6vh'
               
                campo.style.display="flex"
                campo.style.margin="0 auto"

                campo.innerHTML = ('Temperatura atual: ' + temperatura + 'C ' + '<br>' + 'Hora atual: ' + hora + '<br>' + 'Velocidade do vento em MPH: ' + vento + 'MPH')
                x=true

                let btn = document.createElement('button')
                btn.textContent = 'Recarregar'
                btn.id = 'BtnLoad'

                btn.addEventListener('click', () => {
                    campo.remove()
                    btn.remove()
                    return x = false
                })
                document.body.appendChild(btn)
                document.body.appendChild(campo)
              
            }

        }
        x = true

    }
    catch (error) {
        campo.innerHTML = (error)
    }
}   
