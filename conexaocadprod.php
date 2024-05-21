<?php 

    $print = function($class) {
        if(file_exists('./classes1/' . $class .'.php')) {
            include_once('./classes1/' . $class .'.php');
        }
    };

    spl_autoload_register($print);

    define('HOST', 'localhost');
    define('DATABASE', 'cada_prod_projeto');
    define('USER', 'root');
    define('PASSWORD', '');
?>