<?php
namespace IntroMVC\Model;

    class PessoaModel{
        private $id;
        private $nome;
        private $sobrenome;
        private $idade;

        public function setPessoa($id, $nome, $sobrenome, $idade){
            $this->id = $id;
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->idade = $idade;
        }

        public function getPessoa():PessoaModel{
            $pessoa = new PessoaModel();
            $pessoa->id = $this->id;
            $pessoa->nome = $this->nome;
            $pessoa->sobrenome = $this->sobrenome;
            $pessoa->idade = $this->idade;
            return $pessoa; 
        }

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function getIdade(){
            return $this->idade;
        }

    }
?>