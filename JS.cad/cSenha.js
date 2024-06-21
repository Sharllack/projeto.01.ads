$(document).ready(function(){
    $('#idsen, #idcsen').on('keyup', function() {
        if($('#idsen').val() == $('#idcsen').val() && $('#idsen').val()) {
            $('#resSenha').html('As senhas Coincidem').css('color', 'rgb(0, 255, 42)');
            return true;
        } else {
          $('#resSenha').html('As senhas não coincidem').css('color', 'red');
            return false;
        }
    });
    $('#form').on('submit', function(){
        const cpfInput = document.getElementById('cpf');
        const cpf = cpfInput.value;

        if (validarCPF(cpf)) {
            return true;
        } else {
            return false;
        }
    })
});