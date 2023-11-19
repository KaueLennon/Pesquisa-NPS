<?php


if(!empty($_GET['id']))
{   

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM pergunta WHERE id = $id";

    $result = $conexao->query($sqlSelect);

    $sqlPergunta = "SELECT * FROM pergunta ORDER BY sequencia ASC";

    $result2 = $conexao->query($sqlPergunta)->fetch_all(PDO::FETCH_ASSOC);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result)){
         
        $pergunta = $user_data['pergunta'];
        $sequencia = $user_data['sequencia'];
        $tipo = $user_data['tipo'];
        }
    }
    else {
        header('Location: ger_pergunta.php');
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Edição Usuário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #3C7FE8, #16e7c4);
        }

        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.8);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }

        fieldset{
            border: 3px solid #048a8f;
        }

        legend{
            border: 1px solid #048a8f;
            padding: 10px;
            text-align: center;
            background-color: #048a8f;
            border-radius: 8px;
            color: white;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            outline: none;
            border: none;
            border-bottom: 1px solid white;
            width: 100%;
            color: white;
            font-size: 15px;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -15px;
            font-size: 10px;
            color: aqua;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
        }

        #update{
            width: 100%;
            border-radius: 7px;
            outline: none;
            border: none;
            background-color: #3C7FE8;
            color: white;
            font-weight: 100%;
            font-size: 18px;
            padding: 5px;
            cursor: pointer;
        }

        #update:hover{
            background-color: aquamarine;
            color: black;
        }

        a{
            text-decoration: none;
            background-color: white;
            color: black;
            padding: 5px;
            border-radius: 5px;
        }

        a:hover{
            background-color: silver;
        }
  
    </style>
</head>
<body>
    <a href="ger_pergunta.php">Voltar</a>
    <div class="box">
        <form action="saveEditPergunta.php" method="POST">
            <fieldset>
                <legend><b>Editar Pergunta <?php echo $sequencia ?></b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="pergunta" id="pergunta" class= "inputUser" value="<?php echo $pergunta ?>" required>
                    <label for="pergunta" class="labelInput">Pergunta</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="sequencia"><b>Sequência</b></label>
                    <select name="sequencia" id="sequencia" required>  
                    <?php
                        $maxSequencia = count($result2);
                            for($i=1;$i<=$maxSequencia;$i++){
                                echo "<option value='$i'";
                                if($sequencia == $i){
                                    echo " selected"; 
                                }
                                echo ">$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <br><br>
                <div class="InputBox">
                <label for="tipo"><b>Tipo Questão</b></label>
                <select name="tipo" id="tipo" required>  
                <?php
                    $tipos = ["ABERTA", "FECHADA", "S/N"]; 
                    foreach ($tipos as $opcao) {
                        echo "<option value='$opcao'";
                        if ($tipo === $opcao) {
                            echo " selected"; 
                        }
                        echo ">$opcao</option>";
                    }
                    ?>
                </select>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" value="Salvar">
            </fieldset>
        </form>
    </div>
</body>
</html>