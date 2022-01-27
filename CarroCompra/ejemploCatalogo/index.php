<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" xmlns="http://www.w3.org/1999/html"/>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>

</style>
</head>
<body>
<h1 class="titleName">CATÁLOGO DE PRODUCTOS</h1>

<div style="width: 90%">
    <div style="float: left; width: 80%">
        <?php
        session_start();
        include "modelo.php";
        $productos = getProductos();

        foreach ($productos as $p) { ?>
            <div class="producto">
                
                <!--FAVORITOS.
                Coger codigo del producto:-->
                <br>
                <img src="<?= $p["imagen"] ?>" alt="Producto"> <br>
                <h2><?= $p["precio"] ?> €</h2>
                <h3><?= $p["nombre"] ?></h3>
                <?= $p["descripcion"] ?>
                <br>
                <br>
                <div style="margin-bottom: 35px"><a class="buttonStyle4 btn btn-primary form-control" href="detalle.php?id=<?= $p["id"] ?>">Ver el producto</a> <br></div>
                <div style="margin-bottom: 35px">
                    Introduzca la Cantidad Deseada
                    <input type="number" class="form-control cantidad" id="cantidad-<?= $p["id"] ?>" value="1">
                </div>
                <div style="margin-bottom: 35px"><button class="buttonStyle3 carro btn btn-primary form-control" data-id="<?= $p["id"] ?>" >Añadir al Carrito de Compras</button> <br></div>
                <div style="margin-bottom: 35px"><a class="buttonStyle5 favoritos btn btn-primary form-control" data-id="<?= $p["id"] ?>">Añadir a Favoritos</a></div>
            </div>
        <?php } ?>
    </div>

    <div style="float: right; width: 20%">
        <div style="margin-bottom: 35px"> <a class="buttonStyle1 btn btn-primary form-control" href="carrito.php?id=<?= null ?>">Ver el Carrito de Compras</a> </div>
        <div style="margin-bottom: 35px"> <a class="buttonStyle2 btn btn-primary form-control" href="favoritos.php?id=<?= null ?>" >Ver los Favoritos</a> </div>
        <iframe src="vistos.php" frameborder="1" style="height: 500px; width:400px"> </iframe>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

//html. poner atricuto codigo articulo:
    $(document).ready(function() {
        $(".carro").click(function(){
            //$(this).toggleClass("carroCompra")

            alert("Código del producto: "+$(this).attr("data-id"));

            cantidad= document.getElementById("cantidad-" + $(this).attr("data-id")).value;

            alert("Cantidad: "+cantidad);

            url = "addCarroCompra.php?id=" + $(this).attr("data-id") + "&cantidad=" + cantidad;

            $.get(url);
        });

        $(".favoritos").click(function(){
            //$(this).toggleClass("carroCompra")

            alert("Código del producto: "+$(this).attr("data-id"));

            url = "setfavoritos.php?id=" + $(this).attr("data-id");

            $.get(url);
        });


    });

</script>
</body>
</html>


