$(document).ready(function(){
    $('#idsen, #idcsen').on('keyup', function() {
        if($('#idsen').val() == $('#idcsen').val()) {
            $('#resSenha').html('As senhas coincidem').css('color', 'green');
        } else {
          $('#resSenha').html('As senhas não coincidem').css('color', 'red');
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