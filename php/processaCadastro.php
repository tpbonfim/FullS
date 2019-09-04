<?php
	require_once 'conexao.php';

    $nome = $_POST ['nome'];
    $cpf = $_POST ['cpf'];
    $CEP = $_POST ['CEP'];
    $telefone = $_POST ['telefone'];
    $nivel = $_POST ['nivel'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];

    $senha = sha1($senha);
    
    $query = "INSERT INTO cadastro (nome, cpf, CEP, telefone, nivel, email, senha) VALUES ('$nome', '$cpf', '$CEP', '$telefone', '$nivel', '$email', '$senha')";
    //echo $query; exit;
    $exe = mysqli_query ($conexao, $query);
    //print_r($query); exit;
    if($exe == 1){
        echo "<script> alert ('Cadastrado com sucesso!'); location.href='contratante.php' </script> ";
    }else{
        echo "<script> alert ('Ops deu ruim'); location.href='../contratante.php' </script>";
    }
?>