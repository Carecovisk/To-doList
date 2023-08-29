<?php

    require_once("config/Connector.php");

    Class UserModel {

        private function usuarioNaoExiste($username, PDO $conexao) : bool {
            $sql = $conexao -> query("SELECT * FROM Usuario WHERE username = '$username';");
            $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);

            return empty($sql);
        }

        function cadastro($username, $password) : bool {
            $Conector = new Connector();
            $conexao = $Conector -> getConnection();
            
            if ( $this-> usuarioNaoExiste($username, $conexao)) {
                $conexao -> query("INSERT INTO Usuario (username, password) VALUES ('$username', '$password')");
                return true;
            }
            else {
                return false;
            }
        }

        function login() : bool {
            return true;
        }
    }

?>