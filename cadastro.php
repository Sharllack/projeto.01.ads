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
        
        sleep(2);

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
            <div class="nome">
                <label for="idnome" class="resNome" >Nome</label>
                <input type="text" name="nome" placeholder="Nome completo" id="idnome" onkeydown="verNome()" onkeypress="verNome()" onkeyup="verNome()" maxlength="80" required value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>">
            </div>
            <div class="data">
                <label for="idata">Data de Nascimento</label>
                <input type="date" id="idata" name="data_nascimento" placeholder="Data de nascimento" required value="<?php echo isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : ''; ?>">
            </div>
            <div class="sexo">
                <label for="idsexo">Sexo</label>
                <select name="sexo" id="idsexo" required value="<?php echo isset($_POST['sexo']) ? $_POST['sexo'] : ''; ?>">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
            <div class="nomeDaMae">
                <label for="idmae" class="resNomeMae">Nome Materno</label>
                <input type="text" name="nome_materno" placeholder="Nome Completo" id="idmae" onkeydown="verNomeMae()" onkeypress="verNomeMae()" onkeyup="verNomeMae()" maxlength="80" required value="<?php echo isset($_POST['nome_materno']) ? $_POST['nome_materno'] : ''; ?>">
            </div>
            <div class="cpf">
                <label for="cpf" id="labcpf">CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="Ex.: 123.456.789-09" onkeyup="verificarCPF()" max="14" maxlength="14" required value="<?php echo isset($_POST['cpf']) ? $_POST['cpf'] : ''; ?>">
                <span class="msgError"><?php echo $cpf_error; ?></span>
            </div>
            <div class="email">
                <label for="idemail" id="labemail">E-mail</label>
                <input type="email" name="email" placeholder="E-mail" id="idemail" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                <span class="msgError"><?php echo $email_error; ?></span>
            </div>
            <div class="celular">
                <label for="idtel">Telefone Celular</label>
                <input type="tel" class="tel" name="telefone_celular" placeholder="Ex.: +XX (XX) XXXXX-XXXX" id="idtel" maxlength="13" required value="<?php echo isset($_POST['telefone_celular']) ? $_POST['telefone_celular'] : ''; ?>">
                <span class="msgError"><?php echo $cell_error; ?></span>
            </div>
            <div class="telFixo">
                <label for="idtelf" id="labTelF">Telefone Fixo</label>
                <input type="tel" class="tel" name="telefone_fixo" placeholder="Ex.: +XX (XX) XXXX-XXXX" id="idtelf" maxlength="12" required value="<?php echo isset($_POST['telefone_fixo']) ? $_POST['telefone_fixo'] : ''; ?>">
            </div>
            <div class="cep">
                <label for="idcep" id="labcep">CEP</label>
                <input type="text" class="end" id="idcep" name="cep" placeholder="Ex.: XXXXX-XXX" required value="<?php echo isset($_POST['cep']) ? $_POST['cep'] : ''; ?>">
            </div>
            <div class="rua">
                <label for="idrua" id="labrua">Rua</label>
                <input type="text" class="end" name="rua" id="idrua" placeholder="Rua" required value="<?php echo isset($_POST['rua']) ? $_POST['rua'] : ''; ?>">
            </div>
            <div class="numero">
                <label for="idnum">Número</label>
                <input type="text" class="end" name="num" id="idnum" placeholder="Nº" required value="<?php echo isset($_POST['num']) ? $_POST['num'] : ''; ?>">
            </div>
            <div class="complemento">
                <label for="idcomp">Complemento</label>
                <input type="text" class="end" name="comp" id="idcomp" placeholder="Complemento" required value="<?php echo isset($_POST['comp']) ? $_POST['comp'] : ''; ?>">
            </div>
            <div class="bairro">
                <label for="idbai">Bairro</label>
                <input type="text" class="end" name="bairro" id="idbai" placeholder="Bairro" required value="<?php echo isset($_POST['bairro']) ? $_POST['bairro'] : ''; ?>">
            </div>
            <div class="cidade">
                <label for="idcdd">Cidade</label>
                <input type="text" class="end" name="cdd" id="idcdd" placeholder="Cidade" required value="<?php echo isset($_POST['cdd']) ? $_POST['cdd'] : ''; ?>">
            </div>
            <div class="estado">
                <label for="idest">Estado</label>
                <input type="text" class="end" name="estado" id="idest" placeholder="Estado" required value="<?php echo isset($_POST['estado']) ? $_POST['estado'] : ''; ?>">
            </div>
            <div class="login">
                <label for="idlogin" id="resLog">Login</label>
                <input type="text" name="login" placeholder="Login com 6 caracteres" id="idlogin" maxlength="6" minlength="6" required value="<?php echo isset($_POST['login']) ? $_POST['login'] : ''; ?>">
                <span class="msgError"><?php echo $usuario_error; ?></span>
            </div>
            <div class="senha">
                <label for="idsen" id="labSen">Senha</label>
                <input type="password" name="senha" placeholder="Senha com 8 caracteres" id="idsen" maxlength="8" minlength="8" required value="<?php echo isset($_POST['senha']) ? $_POST['senha'] : ''; ?>">
            </div>
            <div class="confirmacaoDeSenha">
                <label for="idcsen" id="resSenha">Confirme a senha</label>
                <input type="password" name="confirmacao_senha" placeholder="Confirmação da Senha" id="idcsen" maxlength="8" minlength="8" required value="<?php echo isset($_POST['confirmacao_senha']) ? $_POST['confirmacao_senha'] : ''; ?>">
            </div>
            <div class="btn">
                <button type="submit" name="acao">Enviar</button>
                <button type="reset">Limpar Tela</button>
            </div>
        </form>
    </div>
    <footer>Site criado por <strong>Larissa Menezes</strong> e <strong>Lucas Menezes</strong> para o Projeto de ADS.</footer>
    
    <script src="./JS.cad/darkmode.js"></script>
    <script src="./JS.cad/cep.js"></script>
    <script src="./JS.cad/cpf.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./JS.cad/cSenha.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="./JS.cad/formatacao.js"></script>
    <script src="./JS.cad/funcoes.js"></script>
</body>
</html>