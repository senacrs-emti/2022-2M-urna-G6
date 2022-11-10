const tela = document.getElementById("tela")
const btnConfirmar = document.getElementById("btnConfirmar")
const btns = document.querySelectorAll(".btn")


let etapa = 0

function inicio() {
    etapa = 0
    atualizarTela()
}

function atualizarTela() {
    switch (etapa) {
        case 0:
            tela.innerHTML = 'DEPUTADO FEDERAL'
            tela.innerHTML += '<input type="text" id="inputVoto">'
            actions()
        break;
        case 1:
            tela.innerHTML = 'DEPUTADO ESTADUAL'
        break;
        case 2:
            tela.innerHTML = 'SENADOR'
        break;
        case 3:
            tela.innerHTML = 'GOVERNADOR'
        break;
        case 4:
            tela.innerHTML = 'PRESIDENTE'
            
        break;

        default:
            tela.innerHTML = 'FIM'
            console.log('FIM')
            setTimeout(inicio, 3000)
            break;
    }
}

function actions() {
    let inputVotos = document.getElementById("inputVoto")
    btns.forEach(button => {
    button.addEventListener("click", () => {
        inputVotos.value += button.value
    })
})
}

btnConfirmar.addEventListener('click', () => {
    etapa++;
    atualizarTela()
})


atualizarTela()