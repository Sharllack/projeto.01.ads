<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilo.cadprod/style.css">
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
        <form  method="post">
            <label for="idnome">Nome do Produto</label>
            <input type="text" name="nome" placeholder="Nome completo" id="idnome" minlength="15" maxlength="80" required>
            <label for="idata">Data de Nascimento</label>
            <input type="text" id="idata" name="data_nascimento" placeholder="Data de nascimento" required>
            <label for="idmae">Nome Materno</label>
            <input type="text" name="nome_materno" placeholder="Nome Completo" id="idmae" required>
            <label for="cpf">CPF</label>
            <p id="rescpf"></p>
            <input type="text" id="cpf" name="cpf" placeholder="Ex.: 123.456.789-09" onblur="verificarCPF()" onkeyup="formatacpf(this)" maxlength="11" required>
            <label for="idimgPrin" class="file"><span class="span1">Imagem Principal</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="imgPrin" id="idimgPrin">
            <label for="idmin1" class="file"><span class="span2">Miniatura 1</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="min1" id="idmin1">
            <label for="idmin2" class="file"><span class="span3">Miniatura 2</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="min2" id="idmin2">
            <button type="submit" name="acao">CADASTRAR</button>
            <button type="reset">LIMPAR</button>
            <input type="hidden" name="form" value="f_form">
        </form>
    </div>
    <script src="./JS.cadprod/file.js"></script>
</body>
</html>