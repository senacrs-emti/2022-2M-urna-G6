import candidatos from "./candidatos.js"

const tela = document.getElementById("tela")
const btnConfirmar = document.getElementById("btnConfirmar")


let tamanho = candidatos.length + 1;
for(let i = 0; i<tamanho; i++){
    
    candidatos.forEach( (candidato) => {
        console.log(candidato.PRESIDENCIA[i].NUMERO == '10' ? candidato.PRESIDENCIA[i].NOME : '')
    })

}


let etapa = 0

function inicio() {
    etapa = 0
    atualizarTela()
}

function atualizarTela() {
    switch (etapa) {
        case 0:
            tela.innerHTML = 'DEPUTADO FEDERAL'
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

btnConfirmar.addEventListener('click', () => {
    etapa++;
    atualizarTela()
})


atualizarTela()