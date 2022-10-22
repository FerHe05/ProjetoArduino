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
    <title>Document</title>
</head>
<body>
    
</body>
</html>