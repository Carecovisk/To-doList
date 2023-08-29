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
                $conexao = null;
                return true;
            }
            else {
                $conexao = null;
                return false;
            }
        }

        function login($username, $password) : bool {
            $Connector = new Connector();
            $conexao = $Connector -> getConnection(); 
            // if ($this-> usuarioNaoExiste($username, $conexao)) {
            //     $conexao = null;
            //     return false;
            // }

            $sql = $conexao -> query("SELECT * FROM Usuario WHERE username = '$username' AND password = '$password';");
            $sql = $sql -> fetch(PDO::FETCH_ASSOC);

            return !empty($sql);

        }
    }

?>