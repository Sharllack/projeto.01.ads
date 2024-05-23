const senha = document.getElementById('idsen');
const cSenha = document.getElementById('idcsen');

function confirmarSenha() {

    if (senha.value != cSenha.value) {
        cSenha.setCustomValidity('Senhas diferentes');
        cSenha.reportValidity();
        return false;
    } else {
        cSenha.setCustomValidity('');
        return true;
    }
}

cSenha.addEventListener('input', confirmarSenha);