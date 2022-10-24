<?php
if (!isset($_SESSION)) session_start(); //se a sessão n for iniciado
if (!isset($_SESSION["user"])) //se a sessão "user" n for iniciado 
{
  session_destroy(); //destroi a sessão
  header("Location: index.php"); //manda o user pro index
  exit;
}
?>
