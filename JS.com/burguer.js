const pe = document.getElementById('pe');
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