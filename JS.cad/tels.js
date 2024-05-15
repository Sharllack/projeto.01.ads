function formataCell(v){
    v.value = v.value.replace(/(\d{2})(\d{2})(\d{5})(\d)/, '+$1 ($2) $3-$4')
}

function formataTel(v){
    v.value = v.value.replace(/(\d{2})(\d{2})(\d{4})(\d)/, '+$1 ($2) $3-$4')
}