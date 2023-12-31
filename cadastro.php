<?php

if(isset($_POST['submit']))
{   

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $perfil = "usuario";

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome, senha, email, telefone, sexo, data_nasc, cidade, estado,endereco,perfil) VALUES ('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco', '$perfil') ");

    header('Location: home.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
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
            letter-spacing: 2px;
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

        #submit{
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

        #submit:hover{
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
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div> 
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="outros" value="outros" required>
                <label for="outros">Outros</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>    
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <!-- <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div> -->
                <div class="InputBox">
                <label for="estado"><b>Estado</b></label>
                <select name="estado" id="estado" required>
                    <option value="" disabled selected>Selecione o estado</option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <!-- <br>
                <p>Perfil:</p>
                <input type="radio" name="perfil" id="usuario" value="usuario" required>
                <label for="usuario">Usuário</label>
                <input type="radio" name="perfil" id="administrador" value="administrador" required>
                <label for="administrador">Administrador</label> -->
                <br><br>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>