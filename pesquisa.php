    <?php
        session_start();
        include_once 'config.php';
        include_once 'autenticacao.php';
        
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
        <style>
        
        *{
            margin: 0;
            padding: 0;
        }

        body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, #3C7FE8, #16e7c4);
        }

        .container1{
            display: flex;
            align-items: center;
            flex-direction: row;
            background-color: black;
            justify-content: space-between;
        }

        .titulopag{
            color: white;
        }

        .logo3r {
        position: relative;
        height: auto;
        width: 80px;
        /* margin-right: 350px; */
        /* top: 8px; */
        }

        .botaosair{
            padding: 8px 8px;
            background-color: red;
            color: white;
            border-radius: 10px;
            border: 2px solid black;
            text-decoration: none;
            text-align: center;
            width: 75px;
            height: 100%;
        }


        </style>
    </head>
    <body>
        
        <div class="container1">
            <a href="telainicio.php">
                <img class="logo3r" src="imagens/3rlogo.png" alt="Logo 3R">
            </a>
            <h1 class="titulopag">Formulário de Pesquisa de Satisfação</h1>
            <a href="sair.php" class="botaosair">Sair</a>
        </div>
        
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