let trocaimg = 0
let img = document.querySelector('img')
const imgs = [
    'imgs/pexels-pixabay-219867.jpg',
    'imgs/pexels-bryan-smith-480077-11618329.jpg', 'imgs/pexels-alfomedeiros-19315666.jpg'
]
function clicar() {

    img.style.opacity = '0'

    setTimeout(() => {

        trocaimg = (trocaimg + 1) % imgs.length

        img.src = imgs[trocaimg]
        img.style.opacity = '1'
    }, 1000)
}