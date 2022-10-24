<?php
include ("conecta.php"); // conecta no DB
$temperatura = $_GET['temp']; // busca temperatura via GET (na URL, o nome que aparece em cima do site) 


$sql = "INSERT INTO `controlador2` (`temperatura`) VALUES ('$temperatura')"; // comando SQL

$insere = mysqli_query($conn,$sql);

if ($insere){
	echo "Sucesso";
}
else{
	echo "Erro";
}



?>