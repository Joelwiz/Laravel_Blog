<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora :: Números enteros</title>

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

    <div class="container">
        <!-- CAMBIAR A $_SERVER -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="CALCULADORA">
            <h1>Operaciones con dos números complejos:</h1>
            <h2>(a + bi) y (c + di)</h2>

            <?php

                // Función para ver si un número es correcto.
                function isACorrectNumber($n) {
                    if(strlen($n) > 0) {
                        $n = intval($n);

                        if (is_int($n)) {
                            return true;
                        }
    
                    }

                    return false;
                }

                function displayCookie($cookie) {
                    $string = "";
                    foreach($cookie as $operation) {
                        $string .= $operation."\r\n";
                    }

                    return $string;
                }

                // Inicializamos la sesión:
                session_start();
                $_SESSION['errors'] = [
                    "Error. A debe ser un número.",
                    "Error. B debe ser un número.",
                    "Error. C debe ser un número.",
                    "Error. D debe ser un número.",
                    "Error. Por favor, introduzca todos los campos",
                    "Error. No ha declarado correctamente el operador."
                ];

                //Inicializamos los valores.
                $a = "";
                $b = "";
                $c = "";
                $d = "";
                $result = 0;
                $errors = "";
                $operate = true;
                $historial = [];

                // Cookies:
                // Si no existen la creamos:
                if(isset($_COOKIE['historial'])) {
                    $historial = json_decode($_COOKIE['historial'], true);
                } else {
                    setcookie('historial', json_encode($historial), time()+3600);
                }

                // Comprobaciones:
                if(isset($_POST['num_a']) && isACorrectNumber($_POST['num_a'])) {
                    $a = $_POST['num_a'];
                } else {
                    $errors .= $_SESSION['errors'][0]."\r\n";
                    $operate = false;
                }

                if(isset($_POST['num_b']) && isACorrectNumber($_POST['num_b'])) {
                    $b = $_POST['num_b'];
                } else {
                    $errors .= $_SESSION['errors'][1]."\r\n";
                    $operate = false;
                }

                if(isset($_POST['num_c']) && isACorrectNumber($_POST['num_c'])) {
                    $c = $_POST['num_c'];
                } else {
                    $errors .= $_SESSION['errors'][2]."\r\n";
                    $operate = false;
                }

                if(isset($_POST['num_d']) && isACorrectNumber($_POST['num_d'])) {
                    $d = $_POST['num_d'];
                } else {
                    $errors .= $_SESSION['errors'][3]."\r\n";
                    $operate = false;
                }
                
                // Realizamos las comprobaciones.
                if($operate) {
                        // Declaramos los valores:
                        $a  = $_POST['num_a'];
                        $b  = $_POST['num_b'];
                        $c  = $_POST['num_c'];
                        $d  = $_POST['num_d'];
                        $op = $_POST['operator'];

                        // Comprobamos la operación.
                        switch ($op) {
                            case 'add':
                                $result = ($a + $c).' + '.($b + $d).'i';
                                array_push($historial, '('.$a.' + '.$b.') + ('.$b.' + '.$d.') = '.$result);
                                break;
                            case 'substract':
                                $result = ($a - $c).' + '.($b - $d).'i';
                                array_push($historial, '('.$a.' - '.$b.') + ('.$b.' - '.$d.') = '.$result);
                                break;
                            case 'multiply':
                                $result = ($a * $c - $b * $d).' + '.($a * $d + $b * $c).'i';
                                array_push($historial, '('.$a.' * '.$c.' - '.$b.' * '.$d.') + ('.$a.' * '.$d.' + '.$b.' * '.$c.') = '.$result);
                                break;
                            case 'divide':
                                $divisor1 = ($c * $c + $d * $d);
                                $divisor2 = ($c * $c + $d * $d);

                                if($divisor1 == 0) {
                                    $result = '∞';
                                } else {
                                    $result = (($a * $c + $b * $d) / $divisor1);
                                }

                                if($divisor1 == 0) {
                                    $result .= '+ ∞i';
                                } else {
                                    $result .= '+ '.(($b * $c - $a * $d) / $divisor2).'i';
                                }
                                array_push($historial, '(('.$a.' * '.$c.' + '.$b.' * '.$d.') / ('.$c.'^2 + '.$b.'^2) + ('.$b.' * '.$c.' - '.$a.' * '.$d.') / ('.$c.'^2 + '.$b.'^2) = '.$result);

                                break;
                            case 'clean':
                                $a = "";
                                $b = "";
                                $c = "";
                                $d = "";
                                break;
                            default:
                                # ERROR:
                                $errors .= $_SESSION['errors'][5]."\r\n";
                                break;
                        }

                        if($errors == "") {
                            //Guardamos la cookie:
                            setcookie('historial', json_encode($historial), time() + (3600 * 24 * 5));
                        }

                } else {
                    $errors .= $_SESSION['errors'][4]."\r\n";
                }

                // Destruimos la sesión al terminar.
                session_destroy();

                $html =     '<div class="row">';

                $html .=        '<div class="form-group col-6">';
                $html .=            '<label for="num_a">a = </label>';
                $html .=            '<input id="num_a" name="num_a" type="number" value="'.$a.'"/>';
                $html .=        '</div>';

                $html .=        '<div class="form-group col-6">';
                $html .=            '<label for="num_b">b = </label>';
                $html .=            '<input id="num_b" name="num_b" type="number" value="'.$b.'"/>';
                $html .=        '</div>';

                $html .=        '<div class="form-group col-6">';
                $html .=            '<label for="num_c">c = </label>';
                $html .=            '<input id="num_c" name="num_c" type="number" value="'.$c.'"/>';
                $html .=        '</div>';

                $html .=        '<div class="form-group col-6">';
                $html .=            '<label for="num_d">d = </label>';
                $html .=            '<input id="num_d" name="num_d" type="number" value="'.$d.'"/>';
                $html .=        '</div>';
                $html .=    '</div>';
               
                $html .=    '<div class="form-group row mt-3">';
                $html .=        '<label class="col-2">Resultado:</label>';
                $html .=        '<textarea class="col-10" readonly>'.$result.'</textarea>';
                $html .=    '</div>';

               
                $html .=    '<div class="form-group row mt-3">';
                $html .=        '<label class="col-2">Errores:</label>';
                $html .=        '<textarea class="col-10" readonly>'.$errors.'</textarea>';
                $html .=    '</div>';

               
                $html .=    '<div class="form-group row mt-3">';
                $html .=        '<label class="col-2">Historial:</label>';
                $html .=        '<textarea class="col-10" readonly>'.displayCookie($historial).'</textarea>';
                $html .=    '</div>';
                
                $html .=    '<div class="form-group mt-3 mb-3 text-center row">';
                $html .=        '<button class="btn btn-primary col-3" type="submit" name="operator" value="add">Sumar</button>';
                $html .=        '<button class="btn btn-primary col-3" type="submit" name="operator" value="substract">Restar</button>';
                $html .=        '<button class="btn btn-primary col-3" type="submit" name="operator" value="multiply">Multiplicar</button>';
                $html .=        '<button class="btn btn-primary col-3" type="submit" name="operator" value="divide">Dividir</button>';
                $html .=    '</div>';

                $html .=    '<div class="form-group mt-3 mb-3 text-center row">';
                $html .=        '<button class="btn btn-danger col-12" type="submit" name="operator" value="clean">Limpiar</button>';
                $html .=    '</div>';

                echo $html;
            ?>
            
        </form>
    </div>
    
</body>
</html>