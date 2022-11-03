<?php
    $servidor = "34.69.90.105";
    $usuario = "senaictm";
    $senha = "senaictm";
    $dbname = "equipe_rafael";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  
?>