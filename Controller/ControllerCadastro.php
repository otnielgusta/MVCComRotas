<?php
namespace IntroMVC\Controller;
use IntroMVC\Dao\DAOdados;
use IntroMVC\Model\PessoaModel;


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];
$senha = $_POST['senha'];

$dao = new DAOdados();
$pessoa = new PessoaModel();
$pessoa->setPessoa("", $nome, $sobrenome, $idade);

$response = $dao->adiciona($pessoa, $senha);

if($response){
    echo '<script>alert("Usuário cadastrado!")</script>';
    header("Location:  http://127.0.0.1/introMVC/?mod=Veiculo&acao=digitar");
}




?>