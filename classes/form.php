<?php 

    class form{

        public static function cadastrar($nome, $data, $sexo, $mae, $cpf, $email, $cell, $tel, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $usuario, $senha) {
            $sql = mysql::site()->prepare("INSERT INTO `dados_usu` VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $sql->execute(array($nome, $data, $sexo, $mae, $cpf, $email, $cell, $tel, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $usuario, $senha));
        }
    }

?>