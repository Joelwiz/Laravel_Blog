<?php include "datos/test1.php"; ?>

<?php

$aciertos = 0;
$errores = 0;

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test de autoescuela</title>

    <style>
        div.pregunta {
            margin: 1em;
            border: 1px solid gray;
            background-color: #E6E6FA;
            padding: 1em;
        }

        .error {
            background-color: deeppink;
            color: white;
        }

        .ok {
            background-color: greenyellow;
            color: white;
        }

        .correcta {
            /*color: blue;*/
        }

        li {
            list-style: none;
        }

        ul {
            padding: 0;

        }
        h1 {
            text-align: center;
        }
    </style>

</head>
<body>

<h1>TEST DE AUTOESCUELA</h1>

<form action="<?= $_SERVER["PHP_SELF"] ?>" METHOD="post">
    <?php
        foreach ($preguntas as $pregunta) {
            $numero = $pregunta["num"];

            echo "<div class='pregunta'>";
                // titulo pregunta
                echo "<span>".$pregunta["num"]."</span> ";
                echo $pregunta["pregunta"];

                // imagen
                if (!empty($pregunta["imagen"])) {
                    echo "<img src=\"imagenes/" . $pregunta["imagen"] . "\">";
                }


                // Opciones
                echo "<ul>";
                foreach ($pregunta["opciones"] as $clave => $opcion) {
                    $checked = ( isset($_POST["respuesta_".$numero]) &&
                                 $_POST ["respuesta_".$numero]== $clave) ? "checked" : "";

                    echo "<li class='opcion'>";
                    echo "<input $checked type='radio' name='respuesta_".$numero."' value='".$clave."'>\n";
                    echo $opcion;
                    echo "</li>";
                }
                echo "</ul>";

                if ( isset( $_POST ["respuesta_".$numero]) ) {
                    if ($pregunta["respuesta"] != $_POST["respuesta_".$numero]) {
                        echo "<p class=\"error\">Respuesta incorrecta. ";
                        echo "<span class=\"correcta\">La respuesta \"correcta\" es ".$pregunta["opciones"][$pregunta["respuesta"]]."</span>";
                        echo "</p>";
                        $errores++;
                    } else {
                        echo "<p class=\"ok\">Respuesta correcta</p>";
                        $aciertos++;
                    }
                }
                echo "<p >Tienes  ".$errores." fallos y ".$aciertos. " aciertos</p>";

            echo "</div>";
        }
    ?>

    <input type="submit" value="Comprobar" name="Comprobar">
</form>

</body>
</html>


