<?php

    require_once("config/Connector.php");

    Class UserModel {

        function cadastro($username, $password) {
            $pdo = new Connector();
            $conexao = $pdo -> getConnection();
            $sql = $conexao -> query("SELECT * FROM Usuario WHERE username = '$username';");
            $sql = $sql -> fetch(PDO::FETCH_ASSOC);
            if (empty($sql)) {
                $conexao -> query("INSERT INTO Usuario (username, password) VALUES ('$username', '$password')");
                return true;
            }
            else {
                return false;
            }
        }
    }

?>