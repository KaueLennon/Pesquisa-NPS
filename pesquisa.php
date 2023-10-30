    <?php
        session_start();
        include_once 'config.php';
        if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        
        $logado = $_SESSION['email'];

        $cod_pesquisa = time();

        $sql = "SELECT * FROM pergunta";

        $result = $conexao-> query($sql)->fetch_all(PDO::FETCH_ASSOC);

        
        // var_dump($_POST);
        // echo "<br>";
        // echo count($_POST);
        // echo "<br>";
        // echo count($result);
        // echo "<br>";


    if(count($_POST) == count($result)){
    
        $stmt = $conexao->prepare("INSERT INTO resposta (resposta, user, fk_pergunta,cod_pesquisa, data_pesquisa) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("isid",$resposta, $user, $fk_pergunta, $cod_pesquisaa);
        for($i=1; $i<count($_POST)+1;$i++){
            $resposta = $_POST['pergunta'.$i];
        $user = $logado;
        $fk_pergunta = $i;
        $cod_pesquisaa = $cod_pesquisa;
        $stmt->execute();
        }

        header('Location: encerramento.php');
    }
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
        <form action="" method= "POST">
            <?php 
                $respostaOrdem = 0;
            foreach($result as $arr_result){
                $respostaOrdem = $respostaOrdem +1; ?>
                <p><?="Pergunta " . $arr_result[2] . ": ". $arr_result[1] ?></p>
                <label for="pergunta<?= $respostaOrdem ?>">
                    <input type="radio" name="pergunta<?= $respostaOrdem ?>" value="1" id="pergunta<?= $respostaOrdem ?>"> 1
                </label>
                <label for="pergunta<?= $respostaOrdem ?>">
                    <input type="radio" name="pergunta<?= $respostaOrdem ?>" value="2" id="pergunta<?= $respostaOrdem ?>"> 2
                </label>
                <label for="pergunta<?= $respostaOrdem ?>">
                    <input type="radio" name="pergunta<?= $respostaOrdem ?>" value="3" id="pergunta<?= $respostaOrdem ?>"> 3
                </label>
                <label for="pergunta<?= $respostaOrdem ?>">
                    <input type="radio" name="pergunta<?= $respostaOrdem ?>" value="4" id="pergunta<?= $respostaOrdem ?>"> 4
                </label>
                <label for="pergunta<?= $respostaOrdem ?>">
                    <input type="radio" name="pergunta<?= $respostaOrdem ?>" value="5" id="pergunta<?= $respostaOrdem ?>"> 5
                </label>
            <?php }?>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>