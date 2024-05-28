<?php

include('./conexaocad.php');
mysql::site();

$cpf_error = $email_error = $cell_error = $usuario_error = '';

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

    // Verificar se o CPF já existe
    $sql_check_cpf = mysql::site()->prepare("SELECT * FROM `dados_usu` WHERE `cpf` = ?");
    $sql_check_cpf->execute(array($cpf));
    if ($sql_check_cpf->rowCount() > 0) {
        $cpf_error = "CPF já cadastrado.";
    }

    // Verificar se o e-mail já existe
    $sql_check_email = mysql::site()->prepare("SELECT * FROM `dados_usu` WHERE `email` = ?");
    $sql_check_email->execute(array($email));
    if ($sql_check_email->rowCount() > 0) {
        $email_error = "E-mail já cadastrado.";
    }

    // Verificar se o número de celular já existe
    $sql_check_cell = mysql::site()->prepare("SELECT * FROM `dados_usu` WHERE `cell` = ?");
    $sql_check_cell->execute(array($cell));
    if ($sql_check_cell->rowCount() > 0) {
        $cell_error = "Número de celular já cadastrado.";
    }

    // Verificar se o nome de usuário já existe
    $sql_check_usuario = mysql::site()->prepare("SELECT * FROM `dados_usu` WHERE `usuario` = ?");
    $sql_check_usuario->execute(array($usuario));
    if ($sql_check_usuario->rowCount() > 0) {
        $usuario_error = "Nome de usuário já cadastrado.";
    }

    // Se não houver erros, inserir os dados
    if (empty($cpf_error) && empty($email_error) && empty($cell_error) && empty($usuario_error)) {
        form::cadastrar($nome, $data, $sexo, $mae, $cpf, $email, $cell, $tel, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $usuario, $senha);

        header("Location: login.php");
        exit; // Certifique-se de sair após o redirecionamento
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/user.ico" type="image/x-icon">
    <link rel="stylesheet" href="./estilo.cadastro/cadastro.css">
    <link rel="stylesheet" href="./estilo.cadastro/media.query.css">
    <title>Cadastro</title>
</head>
<body>

    <header>
        <menu id="topo">
            <a href="./index.php">
                <div id="title">
                    <img src="./imagens/logolm1.png" alt="logo L e M" id="img1">
                    <img src="./imagens/logonfl.png" alt="logo nfl" id="img2">
                </div>
            </a>
            <div id="logo">
                <img src="./imagens/shield.png" alt="shield" id="shield">
                <span id="span">Ambiente 100% seguro</span>
            </div>
        </menu>
    </header>
    <div class="container">
        <h2 name="h2">Cadastro</h2>
        <form id="form" action="" method="post">
            <label for="idnome">Nome</label>
            <input type="text" name="nome" placeholder="Nome completo" id="idnome" minlength="15" maxlength="80" required>
            <label for="idata">Data de Nascimento</label>
            <input type="date" id="idata" name="data_nascimento" placeholder="Data de nascimento" required>
            <label for="idsexo">Sexo</label>
            <select name="sexo" id="idsexo" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            <label for="idmae">Nome Materno</label>
            <input type="text" name="nome_materno" placeholder="Nome Completo" id="idmae" required>
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" placeholder="Ex.: 123.456.789-09" onblur="verificarCPF()" onkeyup="formatacpf(this)" maxlength="14" required>
            <span><?php echo $cpf_error; ?></span><br>
            <p id="rescpf"></p>
            <label for="idemail" id="labemail">E-mail</label>
            <input type="email" name="email" placeholder="E-mail" id="idemail" required>
            <span><?php echo $email_error; ?></span><br>
            <label for="idtel">Telefone Celular</label>
            <input type="tel" class="tel" name="telefone_celular" placeholder="Ex.: +XX (XX) XXXXX-XXXX" id="idtel" onkeyup="formataCell(this)" maxlength="13" required>
            <span><?php echo $cell_error; ?></span><br>
            <label for="idtelf">Telefone Fixo</label>
            <input type="tel" class="tel" name="telefone_fixo" placeholder="Ex.: +XX (XX) XXXX-XXXX" id="idtelf" onkeyup="formataTel(this)" maxlength="12" required>
            <label for="idcep">CEP</label>
            <input type="text" class="end" id="idcep" name="cep" placeholder="Ex.: XXXXX-XXX" onkeyup="formataCep(this)" required>
            <p id=rescep></p>
            <label for="idrua" id="labrua">Rua</label>
            <input type="text" class="end" name="rua" id="idrua" placeholder="Rua" required>
            <label for="idnum">Número</label>
            <input type="text" class="end" name="num" id="idnum" placeholder="Nº" required>
            <label for="idcomp">Complemento</label>
            <input type="text" class="end" name="comp" id="idcomp" placeholder="Complemento" required>
            <label for="idbai">Bairro</label>
            <input type="text" class="end" name="bairro" id="idbai" placeholder="Bairro" required>
            <label for="idcdd">Cidade</label>
            <input type="text" class="end" name="cdd" id="idcdd" placeholder="Cidade" required>
            <label for="idest">Estado</label>
            <input type="text" class="end" name="estado" id="idest" placeholder="Estado" required>
            <label for="idlogin">Login</label>
            <input type="text" name="login" placeholder="Login com 6 caracteres" id="idlogin" maxlength="6" minlength="6" required>
            <span><?php echo $usuario_error; ?></span><br>
            <label for="idsen">Senha</label>
            <input type="password" name="senha" placeholder="Senha com 8 caracteres" id="idsen" maxlength="8" minlength="8" required>
            <label for="idcsen">Confirme a senha</label>
            <input type="password" name="confirmacao_senha" placeholder="Confirmação da Senha" id="idcsen" maxlength="8" minlength="8" required>
            <p id="resSenha"></p>
            <button type="submit" name="acao">Enviar</button>
            <button type="reset">Limpar Tela</button>
            <input type="hidden" name="form" value="f_form">
        </form>
    </div>
    <footer>Site criado por <strong>Larissa Menezes</strong> e <strong>Lucas Menezes</strong> para o Projeto de ADS.</footer>
    
    <script src="./JS.cad/darkmode.js"></script>
    <script src="./JS.cad/cep.js"></script>
    <script src="./JS.cad/cpf.js"></script>
    <script src="./JS.cad/tels.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./JS.cad/cSenha.js"></script>
    
</body>
</html>