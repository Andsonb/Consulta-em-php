<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $ean = $user_data['ean'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $descricao = $user_data['descricao'];
                $nomeproduto = $user_data['nomeproduto'];
                $quantidade = $user_data['quantidade'];
                $data_validade = $user_data['data_validade'];
                $temperatura = $user_data['temperatura'];
                $qualidade = $user_data['qualidade'];
                $peso = $user_data['peso'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
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
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="ean" id="ean" class="inputUser" value=<?php echo $ean;?> required>
                    <label for="ean" class="labelInput">EAN</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="descricao" id="descricao" class="inputUser" value=<?php echo $descricao;?> required>
                    <label for="descricao" class="labelInput">COD/PLU</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="nomeproduto" id="nomeproduto" class="inputUser" value=<?php echo $nomeproduto;?> required>
                    <label for="nomeproduto" class="labelInput">Nome do Produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" value=<?php echo $quantidade;?> required>
                    <label for="quantidade" class="labelInput">Quantidade</label>
                </div>
                <br><br>
                <label for="data_validade"><b>Data de Validade:</b></label>
                <input type="date" name="data_validade" id="data_validade" value=<?php echo $data_validade;?> required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="temperatura" id="temperatura" class="inputUser" value=<?php echo $temperatura;?> required>
                    <label for="temperatura" class="labelInput">Temperatura</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="qualidade" id="qualidade" class="inputUser" value=<?php echo $qualidade;?> required>
                    <label for="qualidade" class="labelInput">Qualidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="peso" id="peso" class="inputUser" value=<?php echo $peso;?> required>
                    <label for="peso" class="labelInput">Peso</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>