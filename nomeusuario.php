<?php

include_once'config.php';
$email = $_SESSION['email'];

$sql = "SELECT * FROM usuario WHERE email = '$email'";

$result = $conexao-> query($sql);


$row = $result->fetch_assoc();
$nomeusuario = $row['nome'];

$nomeCompleto = $nomeusuario;
$partesDoNome = explode(" ", $nomeCompleto);
$primeiroNome = $partesDoNome[0];

?>