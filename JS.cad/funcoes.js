function verNome() {
    const nome = document.querySelector('#idnome').value;

    if (nome.length < 15 || nome.length > 80) {
        document.querySelector('.resNome').innerHTML = "Mínimo de 15 caracteres e máximo de 80.";
        document.querySelector('.resNome').style.color = "red";
        document.querySelector('.resNome').style.fontSize = ".8em"
        document.querySelector('.resNome').style.marginLeft = "15px"
        return false;

    } else {
        document.querySelector('.resNome').innerHTML = "Nome";
        document.querySelector('.resNome').style.fontSize = "1em"
        document.querySelector('.resNome').style.color = "rgb(0, 255, 42)";
        return true;
    }
};

function verNomeMae() {
    const nomeMae = document.querySelector('#idmae').value;

    if (nomeMae.length < 15 || nomeMae.length > 80) {
        document.querySelector('.resNomeMae').innerHTML = "Mínimo de 15 caracteres e máximo de 80.";
        document.querySelector('.resNomeMae').style.color = "red";
        document.querySelector('.resNomeMae').style.fontSize = ".8em"
        document.querySelector('.resNomeMae').style.marginLeft = "15px"
        return false;

    } else {
        document.querySelector('.resNomeMae').innerHTML = "Nome Materno";
        document.querySelector('.resNomeMae').style.fontSize = "1em"
        document.querySelector('.resNomeMae').style.color = "rgb(0, 255, 42)";
        return true;
    }
};

document.querySelector('#idsen').addEventListener('keyup', function() {
    const senha = document.querySelector('#idsen').value;
    const labSen = document.querySelector('#labSen');

    if(senha.length !== 8) {
        labSen.innerHTML = "A senha precisa ter exatamente 8 caracteres alfabéticos."
        labSen.style.color = "red"
        labSen.style.fontSize = ".8em"
        return false;
    } else {
        labSen.innerHTML = "Senha"
        labSen.style.color = "rgb(0, 255, 42)"
        labSen.style.fontSize = "1em"
        return true;
    }
})

document.querySelector('#idlogin').addEventListener('keyup', function() {
    const login = document.querySelector('#idlogin').value;
    const resLog = document.querySelector('#resLog');

    if(login.length !== 6) {
        resLog.innerHTML = "O login precisa ter exatamente 6 caracteres alfabéticos."
        resLog.style.color = "red"
        resLog.style.fontSize = ".8em"
        return false;
    } else {
        resLog.innerHTML = "Login"
        resLog.style.color = "rgb(0, 255, 42)"
        resLog.style.fontSize = "1em"
        return true;
    }
})

function apenasAlfabeticos(event) {
    var input = event.target;
    var valor = input.value;
    
    // Expressão regular para verificar se há apenas caracteres alfabéticos
    var regex = /^[a-zA-Z]+$/;
    
    // Se o valor não corresponder à expressão regular, limpe o campo
    if (!regex.test(valor)) {
        input.value = valor.replace(/[^a-zA-Z]/g, '');
    }
}


// Adicione event listeners para os campos de login, senha e confirmação de senha
document.getElementById('idlogin').addEventListener('input', apenasAlfabeticos);
document.getElementById('idsen').addEventListener('input', apenasAlfabeticos);
document.getElementById('idcsen').addEventListener('input', apenasAlfabeticos);



