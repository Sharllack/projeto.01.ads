<?php 

include("./conexao.php");

if(isset($_GET['deletar'])) {
    
    $id = intval($_GET['deletar']);
    $sql_query = $mysqli->query("SELECT * FROM arquivos WHERE id = '$id'") or die($mysqli->error);
    $arquivo = $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])) {
        $deu_certo = $mysqli->query("DELETE FROM arquivos WHERE id = '$id'") or die($mysqli->error);
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
        $mysqli->query("INSERT INTO arquivos (id, path) VALUES('$nomeDoArquivo','$path')") or die($mysqli->error);
        return true;

    } else
        return false;
}

if(isset($_FILES['arq'])) {
    $arquivo = $_FILES['arq'];
    $tudo_certo = true;
    foreach($arquivo['name'] as $index => $arq) {
        $deu_certo = enviarArquivo($arquivo['error'][$index], $arquivo['name'][$index], $arquivo["tmp_name"][$index]);
        if(!$deu_certo)
            $tudo_certo = false;
    }

    if($tudo_certo)
        echo "<p>Todos os aarquivos foram enviados com sucesso!</p>";
    else
        echo "<p>Falha ao enviar um ou mais arquivos!</p>";

}

$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        tr, th, td {
            border: 1px solid black;
        }
        
        img {
            width: 50px;
        }
    </style>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="post">
        <p>
            <label for="">Selecione o arquivo</label>
            <input multiple type="file" name="arq[]" id="idarq">
        </p>
        <button type="submit">Enviar arquivo.</button>
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
</body>
</html>