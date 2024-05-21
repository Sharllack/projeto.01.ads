<?php 

    class form{

        public static function cadastrar($protocolo, $nomeDoProduto, $preco, $descricao, $imgPrin, $min1, $min2) {
            $sql = mysql::site()->prepare("INSERT INTO `prod` VALUES (?,?,?,?,?,?,?)");
            $sql->execute(array($protocolo, $nomeDoProduto, $preco, $descricao, $imgPrin, $min1, $min2));
        }
    }

?>