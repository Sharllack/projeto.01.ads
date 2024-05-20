<?php 

include('../cadastroProduto/conexaocadprod.php');

if(isset($_GET['deletar'])) {
    
    $id = intval($_GET['deletar']);
    $sql_query = $mysqli->query("SELECT * FROM prod_projeto WHERE protocolo = '$protocolo'") or die($mysqli->error);
    $arquivo = $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])) {
        $deu_certo = $mysqli->query("DELETE FROM prod_projeto WHERE protocolo = '$protocolo'") or die($mysqli->error);
        if($deu_certo)
            echo "<p>Arquivo deletado com sucesso!!</p>";
    }
    
}

function enviarArquivo($error, $name, $tmp_name) {

    include("./conexao.php");

    if($error) {
        die('Falha ao enviar o arquivo!');
    }

    $pasta = "arquivos/";
    $nomeDoArquivo = $name;
    $novoNomeDoArquivo = uniqid(); // para criar um nome aleatório para a img
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION)); //Primeiro coloca em minúsculo e pega a extensão. Ex.: jpg, png, etc...

    if($extensao != "jpg" && $extensao != "png" && $extensao != "webp" && $extensao != "jpeg")
        die('Tipo de arquivo não aceito!');

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($tmp_name, $path);
    if($deu_certo) {
        $mysqli->query("INSERT INTO protocolo (protocolo, path) VALUES('$nomeDoArquivo','$path')") or die($mysqli->error);
        return true;

    } else
        return false;
}

if(isset($_FILES['imgPrin']) && isset($_FILES['min1']) && isset($_FILES['min2'])) {
    $imgPrin = $_FILES['imgPrin'];
    $min1 = $_FILES['min1'];
    $min2 = $_FILES['min2'];

    $tudo_certo = true;
    foreach($imgPrin['name'] as $index => $arq) {
        $deu_certo = enviarArquivo($imgPrin['error'][$index], $imgPrin['name'][$index], $imgPrin["tmp_name"][$index]);
        if(!$deu_certo)
            $tudo_certo = false;
    }

    if($tudo_certo)
        echo "<p>Todos os aarquivos foram enviados com sucesso!</p>";
    else
        echo "<p>Falha ao enviar um ou mais arquivos!</p>";

}

$sql_query = $mysqli->query("SELECT * FROM protocolo") or die($mysqli->error);

if(isset($_POST['acao']) && $_POST['form'] == 'f_form') {
    $protocolo = $_POST['protocolo'];
    $nomeProduto = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    form::cadastrar($protocolo, $nomeProduto, $preco, $descricao);

    echo  "<script>alert('Usuário cadastrado com sucesso!');</script>";
    header("Location: login.php"); //para redirecionar a pág.
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilo.cadprod/style.css">
</head>
<body>
    <header>
        <menu id="topo">
            <a href="./index.php">
                <div id="title">
                    <img src="../imagens/logolm1.png" alt="logo L e M" id="img1">
                    <img src="../imagens/logonfl.png" alt="logo nfl" id="img2">
                </div>
            </a>
            <div id="logo">
                <img src="../imagens/shield.png" alt="shield" id="shield">
                <span id="span">Ambiente 100% seguro</span>
            </div>
        </menu>
    </header>
    <div class="container">
        <form  enctype="multipart/form-data" action="" method="post">
            <label for="idProtocolo">Protocolo do Produto</label>
            <input type="text" name="protocolo" placeholder="Número do Protocolo (Pode ficar vazio)" id="idnome">
            <label for="idnome">Nome do Produto</label>
            <input type="text" name="nome" placeholder="Nome do Produto" id="idnome" required>
            <label for="idPreco">Preço</label>
            <input type="number" id="idPreco" name="preco" placeholder="Valor do Produto"
            step="0.001" required>
            <label for="idDesc">Descrição</label>
            <input type="text" name="descricao" placeholder="descrição do Produto" id="idDesc" required>
            <label for="idImgPrin" class="file"><span class="span1">Imagem Principal</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="imgPrin[]" id="idImgPrin">
            <label for="idmin1" class="file"><span class="span2">Miniatura 1</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="min1[]" id="idmin1">
            <label for="idmin2" class="file"><span class="span3">Miniatura 2</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="min2[]" id="idmin2">
            <button type="submit" name="acao" id="idAcao">CADASTRAR</button>
            <button type="reset">LIMPAR</button>
            <input type="hidden" name="form" value="f_form">
        </form>
        <h1>Lista de Arquivos</h1>
        <table>
            <thead>
                <th>Preview</th>
                <th>Arquivo</th>
                <th>Data de Envio</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                while($arquivo = $sql_query->fetch_assoc()) {
                ?>
                <tr>
                    <td><img src="<?php echo $arquivo['path'] ?>" alt=""></td> <!--PAra mostrar a img-->
                    <td><?php echo $arquivo['id']?></td> <!--Para mostrar o id do arquivo-->
                    <td><?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload']))?></td> <!--Para mostrar quando o arquivo foi enviado-->
                    <th><a href="index.php?deletar=<?php echo $arquivo['id'] ?>">Deletar</a></th>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="../JS.cadprod/file.js"></script>
</body>
</html>