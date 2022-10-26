<?php
if (!isset($_SESSION)) session_start(); //se a sessão n for iniciado
if (!isset($_SESSION["user"])) //se a sessão "user" n for iniciado 
{
  session_destroy(); //destroi a sessão
  header("Location: index.php"); //manda o user pro index
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="menu_style.css" rel="stylesheet"/>
  <title>Document</title>
</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="menu.php">
    <img src="imagens/imglogo.jpg" width="40" height="40">
    EnergyCalc
  </a>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Corrente</td>
      <td>Valor A</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tensão</td>
      <td>Valor V</td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Potência</td>
      <td>Valor W</td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Total</td>
      <td>Valor R$</td>
      
    </tr>
  </tbody>
</table>

</body>
</html>