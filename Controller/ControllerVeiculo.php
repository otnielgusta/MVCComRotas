<?php
namespace IntroMVC\Controller;
use IntroMVC\View\VisaoVeiculos;

    class ControllerVeiculo{
        public function digitar(){
            $visao = new VisaoVeiculos();
            $visao->getForm();
        }

        public function cadastro(){
            $visao = new VisaoVeiculos();
            $visao->cadastro();
        }

    }
?>