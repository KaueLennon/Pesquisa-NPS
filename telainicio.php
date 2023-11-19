<?php

session_start();
include_once'config.php';
include_once'autenticacao.php';
include_once'nomeusuario.php';

$email = $_SESSION['email'];

$sql = "SELECT * FROM usuario WHERE email = '$email'";

$result = $conexao-> query($sql);

// echo $email;

$row = $result->fetch_assoc();
// $nomeusuario = $row['nome'];
$perfil = $row['perfil'];

// echo "Ola $nomeusuario";


// // Dividir o nome do usuário
// $nomeCompleto = $nomeusuario;
// $partesDoNome = explode(" ", $nomeCompleto);
// $primeiroNome = $partesDoNome[0];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Krona+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Krona+One&family=Montserrat:wght@400;600&display=swap');

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #3C7FE8, #16e7c4);
            height: 100vh;
        }

        .titulo_superior {
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 15px;
            color: white;
            text-align: center;
            background-color: black;
        }

        *{
            padding: 0px;
            margin: 0px;
        }

        a{
            text-decoration: none;
            color: black;
        }

        ul{
            list-style: none;
            top: 70px;
            position: absolute;
            width: 100%;
        }

        img{
            width: 40px;
        }

        input[type="checkbox"]{
            display: none;
        }

        nav{
            background-color: rgba(16,16,16,.4);
            width: 350px;
            height: 100%;
            left: -350px;
            position: absolute;
            transition: all .60s;
        }

        input[type="checkbox"]:checked ~ nav {
            transform: translateX(350px);
        }

        a{
            display: block;
            padding: 30px 15px;
            color: white;
        }

        a:hover{
            background-color: rgb(176,224,230);
            color: black;
        }

        label{
            padding: 15px;
            position: absolute;
            z-index: 1;
        } 

        .tela {
        background-color: rgba(0, 0, 0, 0.8);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 30px;
        border-radius: 15px;
        color: white;
        }

        .titulo_1{
           font-size: 28px;
           font-family: 'Krona One', sans-serif;
           padding: 15px;
           text-align: center;
        }

        .botaoIniciarPesq{
            background-color: #125a9c;
            border: 1px solid grey;
            color: white;
            width: 90%;
            border-radius: 5px;
            font-size: 20px;
            padding: 15px;
            text-align: center;
        }  

        

    </style>
</head>
<body>
    <input type="checkbox" id="chec">
    <label for="chec">
        <img src="imagens/menu2.png">
    </label>
    <nav>
        <ul><?php 
            if($perfil === 'administrador'){
                echo '<li><a href="ger_usuario.php">GERENCIAR USUÁRIO</a></li>';
                echo '<li><a href="ger_pergunta.php">GERENCIAR PERGUNTAS</a></li>';
                echo '<li><a href="extracaoexcel.php">EXPORTAR DADOS</a></li>';
            }
            ?>
            <li><a href="sair.php">SAIR</a></li>
        </ul>
    </nav>
    <h1 class="titulo_superior">Pesquisa NPS 3R</h1>
    <div class="tela">
        <h2 class="titulo_1">Olá <?php echo $primeiroNome ?>, para iniciar a pesquisa clique no botão abaixo:</h1>
        <a class="botaoIniciarPesq" href="pesquisa.php">PESQUISA</a>
    </div>
</body>
</html>