<h2>Vistos recientemente</h2>
<?php
if (isset($_COOKIE['vis'])) {
    include_once "modelo.php";
    foreach ($_COOKIE['vis'] as $visto) {
        $producto = getProducto($visto);
        ?>
        <div class="detalle">
            <img class = "imagenVistos" src="<?= $producto["imagen"] ?>">
            <div class="textoVistos"><?= $producto["precio"] ?>€</div>
            <div class="textoVistos"><?= $producto["nombre"] ?> </div>

        </div>

    <?php }}?>
