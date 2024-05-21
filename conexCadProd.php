<?php 

$usuario = 'root';
$senha = '';
$database = 'cada_prod_projeto';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados!" . $mysqli->error);
}

?>