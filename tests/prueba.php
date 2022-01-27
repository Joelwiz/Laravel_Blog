<?php

$correcta = "ccc";

?>

<form action="prueba.php" method="get">
    Opcion a)<input type="radio" name="respuesta" value="aaa"><br>
    Opcion b)<input type="radio" name="respuesta" value="bbb"><br>
    Opcion c)<input type="radio" name="respuesta" value="ccc"><br>

    sexo<br>
    Opcion a)<input type="radio" name="sexo" value="m"><br>
    Opcion b)<input type="radio" name="sexo" value="f"><br>

    <input type="submit" value="comprobar" name="comprobar">
</form>


<?php
    if ($correcta == $_REQUEST["respuesta"]) {
        echo "ok...molto bene";
    } else {
        echo "no es correcta";
    }
?>

DATOS POR GET:
<pre>
<?php print_r($_GET); ?>
</pre>

DATOS POR POST:
<pre>

<?php print_r($_POST); ?>
</pre>

DATOS POR REQUEST:
<pre>
<?php print_r($_REQUEST); ?>
</pre>