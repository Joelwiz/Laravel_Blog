<h2>Productos a Comprar</h2>
<?php
session_start();
//$val=$_GET["id"];
$carrito=[];
$total = 0.0;
$subtotal = 0.0;
$envio = 0.0;


if(isset($_GET['reset'])){
    $_SESSION['carrito']=[];
}else if(isset($_SESSION['carrito'])){
    $carrito= $_SESSION["carrito"];
}

include_once 'modelo.php';
?>

<?php

foreach($carrito as $key=>$val){
    $p = getProducto($key);
    $subtotal+= $p["precio"] * $val;
    if ($subtotal>500){
        $envio = 0.0;
    }else{
        $envio = ($subtotal*10)/100;
    }
    $total = $subtotal +$envio;

    ?>

    <table class="table">
        <tr>
            <td class="col-4"><img class="imagenVistos" src="<?=$p["imagen"] ?>"></td>
            <td class="col-4"><?= $p["nombre"] ?></td>
            <td class="col-2"><?= $p["precio"] ?></td>
            <td class="col-3"><?= $val ?></td>
        </tr>
        <tr>
            <td class="col-4"></td>
            <td class="col-4"></td>
            <td class="col-2">Subtotal: <?= $subtotal ?></td>
            <td class="col-3">Total: <?= $total ?></td>
        </tr>
    </table>

<?php } ?>
