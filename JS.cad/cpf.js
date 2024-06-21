function validarCPF(cpf) {
    const numeros = cpf.replace(/\D+/g, ''); // Remove caracteres não numéricos
    if (numeros.length !== 11) return false; // Verifica se o CPF tem 11 dígitos

    // Verifica se todos os dígitos são iguais
    const digitosIguais = numeros.split('').every(digito => digito === numeros[0]);
    if (digitosIguais) return false;

    // Cálculo do primeiro dígito verificador
    let soma = 0;
    for (let i = 0; i < 9; i++) {
        soma += parseInt(numeros.charAt(i)) * (10 - i);
    }
    let resto = (soma * 10) % 11;
    if (resto === 10 || resto === 11) resto = 0;
    if (resto !== parseInt(numeros.charAt(9))) return false;

    // Cálculo do segundo dígito verificador
    soma = 0;
    for (let i = 0; i < 10; i++) {
        soma += parseInt(numeros.charAt(i)) * (11 - i);
    }
    resto = (soma * 10) % 11;
    if (resto === 10 || resto === 11) resto = 0;
    if (resto !== parseInt(numeros.charAt(10))) return false;

    return true; // CPF válido
}

// Exemplo de uso:
const cpfExemplo = '12345678909'; // CPF fictício
if (validaCPF(cpfExemplo)) {
    console.log('CPF válido.');
} else {
    console.log('CPF inválido.');
}

// Exemplo de uso:

        function verificarCPF() {
            const cpfInput = document.getElementById('cpf');
            const cpf1 = cpfInput.value;

            if (validarCPF(cpf1)) {
                document.getElementById('rescpf').innerHTML = "Tudo certo!";
                document.getElementById('rescpf').style.color = "rgb(0, 255, 42)";
                document.getElementById('cpf').style.border = "1.5px solid rgb(0, 255, 42)";
                document.getElementById('rescpf').style.marginBottom = "5px";
                document.getElementById('rescpf').style.display = "block";
                return true;
            } else {
                document.getElementById('rescpf').innerHTML = "CPF inválido!";
                document.getElementById('rescpf').style.color = "red";
                document.getElementById('cpf').style.border = "1.5px solid red";
                document.getElementById('rescpf').style.marginBottom = "5px";
                document.getElementById('rescpf').style.display = "block";
                return false;
            }
        }
