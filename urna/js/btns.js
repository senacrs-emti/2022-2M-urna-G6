const buttons = document.querySelectorAll('.btn')
const btnBranco = document.getElementById("btnBranco")
const btnCorrige = document.getElementById("btnCorrige")
// const btnConfirmar = document.getElementById("btnConfirmar")
const inputVoto = document.getElementById("inputVoto")
const textarea = document.querySelector('textarea')


buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        textarea.value += btn.innerText
    })
})