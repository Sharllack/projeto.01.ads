function validarCPF(cpf) {
    // Remove caracteres não numéricos
    cpf = cpf.replace(/\D/g, '');

    // Verifica se o CPF tem 11 dígitos
    if (cpf.length !== 11) {
        return false;
    }

    // Calcula o primeiro dígito verificador
    let soma = 0;
    for (let i = 0; i < 9; i++) {
        soma += parseInt(cpf.charAt(i)) * (10 - i);
    }
    let resto = (soma * 10) % 11;
    let digito1 = (resto === 10) ? 0 : resto;

    // Calcula o segundo dígito verificador
    soma = 0;
    for (let i = 0; i < 10; i++) {
        soma += parseInt(cpf.charAt(i)) * (11 - i);
    }
    resto = (soma * 10) % 11;
    let digito2 = (resto === 10) ? 0 : resto;

    // Verifica se os dígitos verificadores são iguais aos do CPF
    if (parseInt(cpf.charAt(9)) !== digito1 || parseInt(cpf.charAt(10)) !== digito2) {
        return false;
    }

    return true;
}

// Exemplo de uso:
const cpfExemplo = '123.456.789-09';
if (validarCPF(cpfExemplo)) {
} else {
    console.log('CPF inválido.');
}

        function verificarCPF() {
            const cpfInput = document.getElementById('cpf');
            const cpf = cpfInput.value;

            if (validarCPF(cpf)) {
            } else {
                alert('CPF inválido.');
            }
        }

function formatacpf(v){
    v.value = v.value.replace(/(\d{3})(\d{3})(\d{3})(\d)/, '$1.$2.$3-$4')
}