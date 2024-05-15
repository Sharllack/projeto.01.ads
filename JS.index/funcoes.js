function mudouTamanho() {
    if (window.innerWidth >= 1349) {
        pe.style.display = 'block'
    } else {
        pe.style.display = 'none'
    }
}
function clickMenu() {
    if (pe.style.display == 'block') {
        pe.style.display = 'none'
    } else {
        pe.style.display = 'block'
    }
}

window.addEventListener('scroll', function(){
    let cab = document.getElementById('header')
    
    cab.classList.toggle('rolagem', window.scrollY > 0) /* Toggle ex.: Se uma coisa existe, retira, senão, põe. */
});

let hamburguer = document.querySelector(".hamburguer");
let menu = document.getElementById("topo");

hamburguer.addEventListener("click", () => menu.classList.toggle("active"));