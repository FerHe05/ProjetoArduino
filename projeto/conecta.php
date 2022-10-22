<?php
    $conn = mysqli_connect("localhost","root","","projeto");
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        echo "Erro de conexão - ".mysqli_connect_error();
    }
?>