<?php 

    class form{

        public static function cadastrar($protocolo, $nomeProduto, $preco, $descricao) {
            $sql = mysql::site()->prepare("INSERT INTO `prod_projeto` VALUES (?,?,?,?)");
            $sql->execute(array($protocolo, $nomeProduto, $preco, $descricao));
        }
    }

?>