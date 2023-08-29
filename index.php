<?php
    require_once("model/UserModel.php");
    

    // -------Insert---------
    
    // try {
    //     $sql -> query("INSERT INTO USUARIO(username, password) VALUES ('Mirian Sponholz', '123PleniusPlaus')");
    // } catch (PDOException $th) {
    //     echo $th -> getMessage() . "<br>";
    // }

    // -------Delete-------

    // $comando = $sql -> prepare("DELETE FROM USUARIO WHERE id = :id");
    // $comando -> bindValue(":id", 2);
    // $comando -> execute();

    // ||

    //$sql -> query("DELETE FROM USUARIO WHERE id = :id");

    //Nota: lembre de usar aspas simples quando for colocar atributos

    $obj = new UserModel();
    $resultado = $obj -> cadastro("João Victor", "mesmaSenhaDeSempre");
    
    if ($resultado) {
        echo "Cadastro efetuado com sucesso! <br>";
    } else {
        echo "Usuario ja existe. <br>";
    }
?>