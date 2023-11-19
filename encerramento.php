<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim Pesquisa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #4285f4; /* Cor do Google */
        }

        h3 {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h1>OBRIGADO!</h1>
    <h3>Agradecemos pelo tempo e atenção em nos avaliar, volte sempre!</h3>
</body>

</html>
