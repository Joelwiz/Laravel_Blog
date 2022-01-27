<?php
session_start();
?>

<?php
$val=$_GET["id"];

$listaFavoritos = $_SESSION["favoritos"];

$listaFavoritos[]=$val;

$_SESSION["favoritos"]= $listaFavoritos;
?>