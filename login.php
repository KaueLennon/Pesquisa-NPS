<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <style>

       body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, #3C7FE8, #16e7c4);
       }

       .logo3r {
        position: relative;
        height: auto;
        width: 100px;
        left: 50%;
        transform: translate(-50%);
       }

       .tela-login {
        background-color: rgba(0, 0, 0, 0.8);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 30px;
        border-radius: 15px;
        color: white;
       }

       .input-tlogin {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
       }

       .inputSubmit{
        background-color: #125a9c;
        border: none;
        color: white;
        width: 100%;
        border-radius: 5px;
        font-size: 15px;
        padding: 15px;
       }
       
       .inputSubmit:hover{
        background-color: deepskyblue;
        cursor: pointer;
       }

       .button-cadastra {
        background-color: whitesmoke;
        border: none;
        color: black;
        border-radius: 5px;
        font-size: 15px;
        padding: 10px;
        text-decoration: none;
       }

       .button-cadastra:hover {
        background-color: rgb(124, 124, 123);
        color: white;
       }
    </style>
</head>
<body>
    <div class="tela-login">
        <img class="logo3r" src="imagens/3rlogo.png" alt="Logo 3R">
        <form action="testLogin.php" method="POST">
            <h1>Login</h1>
            <input class="input-tlogin" type="text" name="email" placeholder="Email">
            <br><br>
            <input class="input-tlogin" type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            <p>Ainda não tem conta?</p>
            <a href="Formulario.php" class="button-cadastra">Cadastre-se</a>
        </form>
    </div>
</body>
</html>