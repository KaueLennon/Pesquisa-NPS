<?php
    session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
    
    $result = $conexao-> query($sql);
    
    if(mysqli_num_rows($result)<1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: home.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['perfil'] = $perfil;
        header('Location: telainicio.php');
    }
}
else
{
header(('Location: home.php'));
}

?>