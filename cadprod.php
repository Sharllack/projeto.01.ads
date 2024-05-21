<?php 

    include('./conexaocadprod.php');
    include('./conexCadProd.php');
    mysql::site();

    if(isset($_POST['acao']) && $_POST['form'] == 'f_form') {
        $protocolo = $_POST['protocolo'];
        $nomeDoProduto = $_POST['nomeDoProduto'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
    }


        if(isset($_FILES['imgPrin']) && isset($_FILES['min1']) && isset($_FILES['min2'])) {
            $imgPrin = $_FILES['imgPrin'];
            $min1 = $_FILES['min1'];
            $min2 = $_FILES['min2'];

            $pasta = "arquivos/";
            $nomeDoArquivo1 = $imgPrin['name'];
            $novoNomeDoArquivo1 = uniqid();
            $extensao1 = strtolower(pathinfo($nomeDoArquivo1, PATHINFO_EXTENSION));
    
            $nomeDoArquivo2 = $min1['name'];
            $novoNomeDoArquivo2 = uniqid();
            $extensao2 = strtolower(pathinfo($nomeDoArquivo2, PATHINFO_EXTENSION));
    
            $nomeDoArquivo3 = $min2['name'];
            $novoNomeDoArquivo3 = uniqid();
            $extensao3 = strtolower(pathinfo($nomeDoArquivo3, PATHINFO_EXTENSION));
    
            if($extensao1 != "jpg" && $extensao1 != "png" && $extensao1 != "webp" &&$extensao1 != "jpeg" && $extensao2 != "jpg" && $extensao2 != "png" && $extensao2 != "webp" &&$extensao2 != "jpeg" && $extensao3 != "jpg" && $extensao3 != "png" && $extensao3 != "webp" &&$extensao3 != "jpeg") {
                die('Tipo de arquivo não aceito!');
            };
    
            $path1 = $pasta . $novoNomeDoArquivo1 . "." . $extensao1;
            $path2 = $pasta . $novoNomeDoArquivo2 . "." . $extensao2;
            $path3 = $pasta . $novoNomeDoArquivo3 . "." . $extensao3;
    
            $deu_certo1 = move_uploaded_file($imgPrin['tmp_name'], $path1);
            $deu_certo2 = move_uploaded_file($min1['tmp_name'], $path2);
            $deu_certo3 = move_uploaded_file($min2['tmp_name'], $path3);
    
            if($deu_certo1 && $deu_certo2 && $deu_certo3) {
                $mysqli->query("INSERT INTO prod (protocolo, nome, preco, descricao, imgPrin, mini1, mini2) VALUES('$protocolo' ,'$nomeDoProduto', '$preco', '$descricao', '$path1', '$path2', '$path3')") or die($mysqli->error);
                    echo "<p>sucesso!</p>";
                } else {
                    echo "<p>fracasso!</p>";
                };
        }

$sql_query = $mysqli->query("SELECT * FROM prod") or die($mysqli->error);

?>

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
            <a href="./cadprod.php">
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
        <form  enctype="multipart/form-data" action="" method="post">
            <label for="idProtocolo">Protocolo do Produto</label>
            <input type="text" name="protocolo" placeholder="Número do Protocolo (Pode ficar vazio)" id="idnome">
            <label for="idnome">Nome do Produto</label>
            <input type="text" name="nomeDoProduto" placeholder="Nome do Produto" id="idnome" required>
            <label for="idPreco">Preço</label>
            <input type="number" id="idPreco" name="preco" placeholder="Valor do Produto"
            step="0.001" required>
            <label for="idDesc">Descrição</label>
            <input type="text" name="descricao" placeholder="descrição do Produto" id="idDesc" required>
            <label for="idImgPrin" class="file"><span class="span1">Imagem Principal</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="imgPrin" id="idImgPrin">
            <label for="idmin1" class="file"><span class="span2">Miniatura 1</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="min1" id="idmin1">
            <label for="idmin2" class="file"><span class="span3">Miniatura 2</span><span class="span">SELECIONAR</span></label><br>
            <input multiple type="file" name="min2" id="idmin2">
            <button type="submit" name="acao" id="idAcao">CADASTRAR</button>
            <button type="reset">LIMPAR</button>
            <input type="hidden" name="form" value="f_form">
        </form>

        <table>
            <thead>
                <th>Protocolo</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Imagem Principal</th>
                <th>Miniatura 1</th>
                <th>Miniatura 2</th>
            </thead>
            <tbody>
            <?php 
                while($imgPrin = $sql_query->fetch_assoc() && $min1 = $sql_query->fetch_assoc() && $min2 = $sql_query->fetch_assoc()); {
                ?>
                <tr>
                    <td><?php echo $protocolo['protocolo'];?></td>
                    <td><?php echo $nomeDoProduto['nome'];?></td>
                    <td><?php echo $preco['preco'];?></td>
                    <td><?php echo $descricao['descricao']?></td>
                    <td><img height="50px" src="<?php echo $imgPrin['imgPrin'];?>" alt=""></img></td>
                    <td><img height="50px" src="<?php echo $min1['mini1'];?>" alt=""></img></td>
                    <td><img height="50px" src="<?php echo $min2['mini2'];?>" alt=""></img></td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="./JS.cadprod/file.js"></script>
</body>
</html>