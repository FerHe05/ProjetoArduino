<?php
include("conecta.php");
$sql_ultima_temp = "SELECT * FROM 'controlador' ORDER BY 'controlador'.'id' DESC limit 1"
$sql_media = "SELECT AVG (temperatura) FROM 'controlador'";
$sql_maxima = "SELECT MAX (temperatura) FROM 'controlador'";
$sql_minina =  "SELECT MIN (temperatura) FROM 'controlador'";

$consulta = mysqli_query($conn,$sql_ultima_temp);
$resultado = mysqli_fetch_array($consulta);
echo "Ultimo valor<b>".$resultado["$temperatura"]."</b><br/>";

$consulta2 = mysqli_query($conn,$sql_media);
$resultado2 = mysqli_fetch_array($consulta2);
echo "Media<b>".$resultado2["$temperatura"]."</b><br/>";

$consulta = mysqli_query($conn,$sql_minima);
$resultado = mysqli_fetch_array($consulta);
echo "Maximo registrado <b>".$resultado["$temperatura"]."</b><br/>";

$consulta = mysqli_query($conn,$sql_maxima);
$resultado = mysqli_fetch_array($consulta);
echo "Minimo<b>".$resultado["$temperatura"]."</b><br/>";

?>