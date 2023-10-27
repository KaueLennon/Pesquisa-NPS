<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Tesla193';
$dbName = 'formulario-kaue';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if($conexao->connect_errno)
// {
//     echo "Erro!";
// } else {
//     echo "Conectado com sucesso!";
// }

?>