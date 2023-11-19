<?php

include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM pergunta WHERE id = $id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM pergunta WHERE id = $id";
        $resultDelete = $conexao->query($sqlDelete);
    }

    header('Location: ger_pergunta.php');
   

?>