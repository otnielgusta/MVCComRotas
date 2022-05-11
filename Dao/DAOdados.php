<?php
namespace IntroMVC\Dao;
use IntroMVC\Model\PessoaModel;
use IntroMVC\Dao\Conexao;
use PDO;

    class DAOdados{
        public function listaTudo(){
            $lista = [];
            
            $pst = Conexao::getPreparedStatement('select nome, sobrenome, idade from dados');
            $pst->execute();
            $lista = $pst->fetch(PDO::FETCH_ASSOC);
            
            return $lista;
        }
        public function validaLogin($nome, $senha){
            $result = [];
            $pst = Conexao::getPreparedStatement('select id, nome, sobrenome, idade from dados where nome = ? and senha = ?');
            $pst->bindValue(1, $nome);
            $pst->bindValue(2, $senha);
            $pst->execute();
            $result = $pst->fetch(PDO::FETCH_ASSOC);

            return $result;
        }

        public function adiciona(PessoaModel $pessoa,  $senha): bool{
            $sql = "insert into dados(nome,sobrenome,idade, senha) VALUES ( ?, ?, ?,?);";
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1,$pessoa->getNome());
            $pst->bindValue(2,$pessoa->getSobrenome());
            $pst->bindValue(3,$pessoa->getIdade());
            $pst->bindValue(4,$senha);
            if($pst->execute()){
                $nome = $pessoa->getNome();
                $sobrenome = $pessoa->getSobrenome();
                return true;
            }else{
                return false;
            }
        }
    }
?>