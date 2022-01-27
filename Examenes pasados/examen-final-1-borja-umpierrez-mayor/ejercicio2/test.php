<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

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
<body>

    <?php
        function paginador($registros, $actual) {
            // Creamos el HTML.
            $HTML       = "<div>";
            $HTML       .= '<a href="?pagina=1"><<</a>';
            if($actual-1 >= 2) $HTML       .= '<a href="?pagina='.($actual-1).'"> < </a>';
            for($i = 1; $i <= $registros; $i++) {
                if($i !== intval($actual)) {
                    $HTML       .= '<a href="?pagina='.$i.'">'.$i.'</a>';
                } else {
                    $HTML       .= '<a class="actual">'.$i.'</a>';
                }
            }
            if($actual+1 < $registros-1) $HTML       .= '<a href="?pagina='.($actual+1).'"> > </a>';
            $HTML       .= '<a href="?pagina='.$registros.'"> >> </a>';
            $HTML       .= "</div>";

            return $HTML;
        }
        
        if(isset($_GET['registros']) && isset($_GET['paginas']) && isset($_GET['actual'])) {
            $registros  = $_GET['registros'];
            $paginas    = $_GET['paginas'];
            $actual     = $_GET['actual'];

            // Creamos los registros.
            $REGIS =    "<h1>Registros:</h1>";
            $REGIS .=    "<ul>";
            for($i = 1; $i <= $paginas; $i++) {
                $REGIS .=   "<li>Registro ".$i."</li>";
            }
            $REGIS .=   "</ul>";


            echo $REGIS;
            echo paginador($registros, $actual);
        } else  {
            echo "Ha habido un error.";
        }
    ?>
        
</body>
</html>