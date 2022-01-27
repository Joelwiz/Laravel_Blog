<h1 class="title"><strong>Productos En El Carrito</strong></h1>
<link rel="stylesheet" href="carroStyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <div>
        <div>

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
            <table class="table">
                <thead>
                <tr>
                    <th class="col-4">Imagen</th>
                    <th class="col-4">Nombre</th>
                    <th class="col-2">Precio</th>
                    <th class="col-3">Cantidad</th>
                </tr>
                </thead>
            </table>
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
        </div>
        <a class="buttonStyle6 btn btn-primary form-control" href="login.php">Comprar</a>
        <a class="buttonStyle6 btn btn-primary form-control" href="index.php">volver</a>
        <a class="buttonStyle6 btn btn-primary form-control" href="carrito.php?reset">Resetear</a>
    </div>
</body>
