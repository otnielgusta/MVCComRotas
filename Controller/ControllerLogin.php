<?php
namespace IntroMVC\Controller;
use IntroMVC\Dao\DAOdados;

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$dao = new DAOdados();

$dados = $dao->validaLogin($nome, $senha);

$json = json_encode($dados);

if (count($dados) > 0) {
    echo "
        <script>
            localStorage.setItem('meuGato', ". $json  .");
        </script>
    ";

    header("Location:  http://127.0.0.1/introMVC/view/home.php");
}else{
    echo '<script>alert("Falha no login!")</script>';

}

return json_encode($dados);


?>