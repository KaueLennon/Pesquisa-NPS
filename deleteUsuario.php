<?php

include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuario WHERE idusuario=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM usuario WHERE idusuario = $id";
        $resultDelete = $conexao->query($sqlDelete);
    }

    header('Location: ger_usuario.php');
   

?>