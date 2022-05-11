<?php
    namespace IntroMVC;

    define('_BASE', $_SERVER['DOCUMENT_ROOT'].'/introMVC/');
    require './vendor/autoload.php';

    $classe = filter_input(INPUT_GET, 'mod');
    $metodo = filter_input(INPUT_GET, 'acao');
    
    if($classe && $metodo){
        $classe = 'IntroMVC\Controller\Controller' . $classe;
        $controller = new $classe();
        $controller->$metodo();

    }else{
        echo 'Nada pra fazer';
    }

    
?>
