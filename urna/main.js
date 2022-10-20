const tela = document.getElementById('tela');
const btnConfirmar = document.getElementById('btnConfirmar');
const btns = document.getElementsByClassName('btn')

// console.log(btns[3 - 1])

function colocar(n) {
    console.log(n)
}

// let imgVoto = '';
// tela.innerHTML = `
//     <div class="telaVoto">
//         <div class="voto">
//             <h2>Votar</h2>
//             <div class="inputVoto">
//                 <input type="number" class="inputNum">
//                 <input type="number" class="inputNum">
//             </div>
//         </div>
//         <div class="votoImg">
//             <img src="${imgVoto}">
//         </div>
//     </div>
// `
// console.log(tela)
// btnConfirmar.addEventListener('click', () => {
//     if(btnConfirmar.classList == '0') {
//         const audioFim = new Audio('sounds/som-fim.mp3');
//         audioFim.play();
//         return;
//     }else{
//         const audioConfirmar = new Audio('sounds/som-confirma.mp3');
//         audioConfirmar.play();
//     }
// })