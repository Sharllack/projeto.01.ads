<?php 

    class mysql{

        private static $pdo;
        
        public static function site(){
            if(self::$pdo == null){
                try{
                    self::$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo "<h1 style='color:red;'>Erro ao conectar-se com o banco de dados!</h1>";
                }
            }
            return self::$pdo;
        }
    }

?>