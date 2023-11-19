<?php

include_once('config.php');

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $pergunta = $_POST['pergunta'];
    $sequencia = $_POST['sequencia'];
    $tipo = $_POST['tipo'];


$sqlUpdate = "UPDATE pergunta SET 
    pergunta = '$pergunta',
    sequencia = '$sequencia',
    tipo = '$tipo'
WHERE id = '$id'";

$result = $conexao->query($sqlUpdate);
}

header('Location: ger_pergunta.php');

?>