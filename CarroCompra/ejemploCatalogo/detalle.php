

<?php include_once "modelo.php" ?>

<?php
    if(isset($_GET["id"])) {
        $val=$_GET["id"];
        setcookie("vis[".$_GET["id"]."]", $val, time() + 365*24*60*60);
        $id=$_GET["id"];
        $p = getProducto($id);

        ?>
<head>
    <link rel="stylesheet" href="detSty.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1 class="title">Detalles del producto</h1>

    <div class="container">

        <div class="producto-detalle">
            <br>
            <img src="<?= $p["imagen"] ?>" alt="Producto" class="img"> <br>
            <h2 class="sub1"><?= $p["precio"] ?> €</h2>
            <h3 class="sub2"><?= $p["nombre"] ?></h3>
            <h5 class="sub3"><?= $p["descripcion"] ?></h5>

            <br><br><br><br>

            <a class="buttonStyle7 btn btn-primary form-control" href="index.php">volver</a>
        </div>
    </div>
</body>

    <?php } else { ?>

        <h1 class="title">PRODUCTO NO SELECCIONADO</h1>


        <a class="buttonStyle7" href="index.php">volver</a>

    <?php }?>
