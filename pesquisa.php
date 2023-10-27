<?php
    session_start();
    
    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Pesquisa</title>
</head>
<body>
    <a href="sair.php">Sair</a>
    <h1>Formulário de Pesquisa de Satisfação</h1>
    <form action="">
        <p>Pergunta 1: Como você avalia nosso serviço?</p>
        <label for="pergunta1">
            <input type="radio" name="pergunta1" value="1" id="pergunta1"> 1
        </label>
        <label for="pergunta1">
            <input type="radio" name="pergunta1" value="2" id="pergunta1"> 2
        </label>
        <label for="pergunta1">
            <input type="radio" name="pergunta1" value="3" id="pergunta1"> 3
        </label>
        <label for="pergunta1">
            <input type="radio" name="pergunta1" value="4" id="pergunta1"> 4
        </label>
        <label for="pergunta1">
            <input type="radio" name="pergunta1" value="5" id="pergunta1"> 5
        </label>

        <p>Pergunta 2: Como você avalia a qualidade do produto?</p>
        <label for="pergunta2">
            <input type="radio" name="pergunta2" value="1" id="pergunta2"> 1
        </label>
        <label for="pergunta2">
            <input type="radio" name="pergunta2" value="2" id="pergunta2"> 2
        </label>
        <label for="pergunta2">
            <input type="radio" name="pergunta2" value="3" id="pergunta2"> 3
        </label>
        <label for="pergunta2">
            <input type="radio" name="pergunta2" value="4" id="pergunta2"> 4
        </label>
        <label for="pergunta2">
            <input type="radio" name="pergunta2" value="5" id="pergunta2"> 5
        </label>

        <p>Pergunta 3: Você recomendaria nosso serviço a outras pessoas?</p>
        <label for="pergunta3">
            <input type="radio" name="pergunta3" value="1" id="pergunta3"> 1
        </label>
        <label for="pergunta3">
            <input type="radio" name="pergunta3" value="2" id="pergunta3"> 2
        </label>
        <label for="pergunta3">
            <input type="radio" name="pergunta3" value="3" id="pergunta3"> 3
        </label>
        <label for="pergunta3">
            <input type="radio" name="pergunta3" value="4" id="pergunta3"> 4
        </label>
        <label for="pergunta3">
            <input type="radio" name="pergunta3" value="5" id="pergunta3"> 5
        </label>

        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>