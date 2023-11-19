<?php

include_once 'config.php';

if(isset($_POST['submit'])){
    $pergunta = $_POST['pergunta'];
    $tipo = $_POST['tipo'];
    $sequencia = $_POST['sequencia'];

    $sqlInsertPergunta = "INSERT INTO pergunta (pergunta, sequencia, tipo) VALUES ('$pergunta', '$sequencia', '$tipo')";

    $result = $conexao->query($sqlInsertPergunta);
    
}else{
    echo "Erro conexão";
}

header('Location: ger_pergunta.php');
?>
