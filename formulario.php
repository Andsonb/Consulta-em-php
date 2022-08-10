<?php

    if(isset($_POST['submit']))
    {
        //verificar se deu certo
        // print_r('ean: ' . $_POST['ean']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('descricao: ' . $_POST['descricao']);
        // print_r('<br>');
        // print_r('quantidade: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de validade: ' . $_POST['data_validade']);
        // print_r('<br>');
        // print_r('temperatura: ' . $_POST['temperatura']);
        // print_r('<br>');
        // print_r('qualidade: ' . $_POST['qualidade']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['peso']);

        
        include_once('config.php');

        $ean = $_POST['ean'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $descricao = $_POST['descricao'];
        $nomeproduto = $_POST['nomeproduto'];
        $quantidade = $_POST['quantidade'];
        $data_validade = $_POST['data_validade'];
        $temperatura = $_POST['temperatura'];
        $qualidade = $_POST['qualidade'];
        $peso = $_POST['peso'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(ean,senha,email,descricao,nomeproduto,quantidade,data_validade,temperatura,qualidade,peso) 
        VALUES ('$ean','$senha','$email','$descricao','$nomeproduto','$quantidade','$data_validade','$temperatura','$qualidade','$peso')");

        header('Location: sistema.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
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
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_validade{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b> Cadastro de Produto </b></legend>
                <br>
                <div class="inputBox">
                    <input type="tel" name="ean" id="ean" class="inputUser" required>
                    <label for="ean" class="labelInput">EAN Produto</label>
                </div>
                <br>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">COD/PLU</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nomeproduto" id="nomeproduto" class="inputUser" required>
                    <label for="nomeproduto" class="labelInput">Nome Do Produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">Quantidade</label>
                </div>
                <br><br>
                <label for="data_validade"><b>Data de validade:</b></label>
                <input type="date" name="data_validade" id="data_validade" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="tel" name="temperatura" id="temperatura" class="inputUser" required>
                    <label for="temperatura" class="labelInput">Temperatura</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="peso" id="peso" class="inputUser" required>
                    <label for="peso" class="labelInput">Peso</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="qualidade" id="qualidade" class="inputUser" required>
                    <label for="qualidade" class="labelInput">Qualidade</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>