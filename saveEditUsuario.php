<?php

include_once('config.php');

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $perfil = $_POST['perfil'];


$sqlUpdate = "UPDATE usuario SET 
    nome = '$nome',
    email = '$email',
    telefone = '$telefone',
    sexo = '$sexo',
    data_nasc = '$data_nasc',
    cidade = '$cidade',
    estado = '$estado',
    endereco = '$endereco',
    perfil = '$perfil'
WHERE idusuario = '$id'";

$result = $conexao->query($sqlUpdate);
}

header('Location: ger_usuario.php');

?>