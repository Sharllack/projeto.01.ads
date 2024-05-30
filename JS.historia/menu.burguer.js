function mudouTamanho() {
    if (window.innerWidth >= 1349) {
        const pe = document.getElementById('pe');
        pe.style.display = 'block'
    } else {
        pe.style.display = 'none'
    }
}

function clickMenu() {
    const pe = document.getElementById('pe');
    if (pe.style.display == 'block') {
        pe.style.display = 'none'
    } else {
        pe.style.display = 'block'
    }
}