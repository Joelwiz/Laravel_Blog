<h1 class="title"><strong>Productos En El Carrito</strong></h1>
<link rel="stylesheet" href="carroStyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
<div>
    <div>

        <?php
        session_start();
        //$val=$_GET["id"];
        $listaFavoritos=[];

        if(isset($_SESSION['favoritos'])){
            $listaFavoritos= $_SESSION["favoritos"];
        }

        include_once 'modelo.php';
        ?>
        <table class="table">
            <thead>
            <tr>
                <th class="col-4">Imagen</th>
                <th class="col-4">Nombre</th>
                <th class="col-4">Precio</th>
            </tr>
            </thead>
        </table>
        <?php

        foreach($listaFavoritos as $val){
            $p = getProducto($val);
            ?>
            <table class="table">
                <tr>
                    <td class="col-4"><img class="imagenVistos" src="<?=$p["imagen"] ?>"></td>
                    <td class="col-4"><?= $p["nombre"] ?></td>
                    <td class="col-2"><?= $p["precio"] ?></td>
                    <td class="col-3"></td>
                </tr>
            </table>

        <?php } ?>
    </div>

    <a class="buttonStyle6 btn btn-primary form-control" href="index.php">volver</a>
</div>
</body>