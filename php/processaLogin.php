<?php
    require_once 'conexao.php';

    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    
    
    
    $query = "SELECT * FROM cadastro where email='$login' and senha='$senha'";
    //echo $query; exit;
    $exe = mysqli_query ($conexao, $query);
    $usa = mysqli_query($conexao, $query);
    $total = mysqli_num_rows($usa);

    if($exe == 1){
        echo "<script> alert ('Logado com sucesso!'); location.href='contratante.php' </script> ";
    }else{
        echo "<script> alert ('Ops deu ruim'); location.href='contratante.php' </script>";
    }
?>