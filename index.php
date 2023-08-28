<?php
    require_once("config/Connector.php");
    $conectator = new Connector();
    $sql = $conectator -> getConnection();
    echo "deu tudo certo fml Uhull";

?>