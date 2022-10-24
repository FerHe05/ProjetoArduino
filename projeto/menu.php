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
    <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <link href="menu_style.css" rel="stylesheet"/>
    <title>Menu</title>
</head>
<body>
<nav class id="navbar">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >EnergyCalc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Perfil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Histórico</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ajuda</a>
      </li>
      
    </ul>
  </div>
</nav>
<br/>
<center><h1>Medidor de Energia</h1></center>
<br/>
<br/>
<table id="customers">

<tr>
        <th>Grandezas</th>
        <th>Valores</th>
    
    </tr> 
   <tr>
       <th>Potência: </th>
       <td>1000</td>
   </tr>
   <tr>
       <th>Corrente: </th>
       <td>22</td>
   </tr>
   <tr>
       <th>Tensão: </th>
       <td>1000</td>
   </tr>
   <tr>
       <th>Gasto: </th>
       <td>22</td>

   </tr>
</table>
</body>
</html>