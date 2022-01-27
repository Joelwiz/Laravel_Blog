<?php
session_start();
?>

<?php
$val=$_GET["id"];

$cantidad = $_GET["cantidad"];

$carrito = isset($_SESSION["carrito"])?$_SESSION["carrito"]:[];

if(isset($carrito[$val])){
    $carrito[$val]=$cantidad;
}else{
    $carrito[$val]=$cantidad;
}

$_SESSION["carrito"] = $carrito;
?>
