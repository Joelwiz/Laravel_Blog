<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Base de datos MovieDB PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: lightskyblue;
        }
        .linea{
            display: inline-block;
        }
        .contenido{
            margin-left:12.5%
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Películas</a>
        <form class="d-flex" action="search.php" method="post">
            <input class="form-control me-2" type="search" name ="sc" placeholder="Buscar" aria-label="Search">
            <button style="margin-left: 5px" class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>

    </div>
</nav>
</body>
</html>

<div class="contenido">
    <?php
    include_once "Pelicula.php";
    $p = new Pelicula();
    $p ->obtenerPeliculas();

    ?>
</div>
