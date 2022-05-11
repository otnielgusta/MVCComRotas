<?php
namespace IntroMVC\View;

class VisaoVeiculos{
    public function __construct()
    {
        
    }

    public function getForm(){
        $titulo = "Login";
        $conteudo = file_get_contents('./view/fragmentos/form.html');
        require_once './view/templates/geral.phtml';
    }
    public function cadastro(){
        $titulo = "Cadastro";
        $conteudo = file_get_contents('./view/fragmentos/cadastro.html');
        require_once './view/templates/cadastro.phtml';
    }
}
?>