<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginador</title>

    <!-- OWN CODE -->
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/javascript.js"></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@600&display=swap" rel="stylesheet" />
</head>
</head>
<body>
    <div class="container">
        <form action="test.php" method="GET" name="PAGINADOR">
            <h1>Generador de paginador:</h1>
            <div class="row text-center">
                <div class="form-group col-4">
                    <label for="registros">Número de registros</label>
                    <input name="registros" type="number" />
                </div>
                <div class="form-group col-4">
                    <label for="pages">Registros por página</label>
                    <input name="paginas" type="number" />
                </div>
                <div class="form-group col-4">
                    <label for="actual">Página actual</label>
                    <input name="actual" type="number" />
                </div>
                <button type="submit" class="col-12 btn btn-primary mt-3">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>