<?php

include('./conexaocad.php');
mysql::site();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $mae = $_POST['nome_materno'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $cell = $_POST['telefone_celular'];
    $tel = $_POST['telefone_fixo'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['num'];
    $complemento = $_POST['comp'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cdd'];
    $estado = $_POST['estado'];
    $usuario = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    form::cadastrar($nome, $data, $sexo, $mae, $cpf, $email, $cell, $tel, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $usuario, $senha);

    header("Location: login.php"); //para redirecionar a pág.
    
    // Aqui você pode adicionar o código para salvar os dados no banco de dados
    // Por razões de segurança, certifique-se de criptografar a senha antes de armazená-la
}

?>