<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
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
        
        $sqlInsert = "UPDATE usuarios 
        SET ean='$ean',senha='$senha',email='$email',descricao='$descricao',nomeproduto='$nomeproduto',quantidade='$quantidade',data_validade='$data_validade',temperatura='$temperatura',qualidade='$qualidade',peso='$peso'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>