<?php
namespace IntroMVC\Dao;
use PDO;
use PDOException;
use PDOStatement;

    class Conexao{
        private static $dsn = 'mysql:host=localhost;dbname=bancodedados;port=3307';
        private static $usuario = 'root';
        private static $senha = '';
        private static $conexao = null;

        public static function getConexao() : PDO{
            if (Conexao::$conexao == null) {
                try {
                    Conexao::$conexao = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
            return  Conexao::$conexao;

        }

        public static function getPreparedStatement($sql): PDOStatement{
            $pst = null;
            if (Conexao::getConexao() != null) {
               try {
                   $pst = Conexao::$conexao->prepare(($sql));
               } catch (PDOException $e) {
                   echo $e->getMessage();
               }
            }
            return $pst;
        }
    }
?>