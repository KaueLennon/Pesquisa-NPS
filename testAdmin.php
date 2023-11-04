<?php

$email = $_SESSION['email'];

$sql = "SELECT * FROM usuario WHERE email = '$email'";

$result = $conexao-> query($sql);

$row = $result->fetch_assoc();
$perfil = $row['perfil'];

if($perfil === 'usuario'){
    header('Location: telainicio.php');
}

?>