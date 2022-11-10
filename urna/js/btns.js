const buttons = document.querySelectorAll(".btnNum")
const btnBranco = document.getElementById("btnBranco")
const btnCorrige = document.getElementById("btnCorrige")
// const btnConfirmar = document.getElementById("btnConfirmar")
const inputVoto = document.getElementById("inputVoto")

for(let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", (e) => {
        if(inputVoto.value == 'BRANCO') {
            return;
        }
        inputVoto.value += e.target.value
    })
}

btnCorrige.addEventListener("click", () => {
    inputVoto.value = ''
})
btnBranco.addEventListener("click", () => {
    inputVoto.value = 'BRANCO'
})