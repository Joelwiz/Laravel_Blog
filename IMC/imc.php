<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC: indice de masa corporal</title>
    <style>
        .rojo{
            color:red;
        }
        .green{
            color:green;
        }
        .blue{
            color:blue;
        }
        .yellow{
            color:yellow;
        }
        body{
            text-align:center;
            background-color:orange;
        }

    </style>
</head>
<body>
    <?php 
        //echo "El peso es: ".$_GET["peso"];
        //echo "La altura es: ".$_GET["altura"];
        //isset= si existe
        $imc=0;
        $descripcion="";
        $ingrasa ="";
        $peso=0;
        $altura =0;
        $perimetro =0;
        $sex=0;

        if(isset($_GET["calcular"])){
            print_r($_GET);//visualiza todos los datos que he pasado en el formulario

            $peso = $_GET["peso"];
            $altura = $_GET["altura"];
            $perimetro = $_GET["perimeter"];
            
            $sex = $_GET["sexo"];

            $imc = $peso / ( $altura * $altura) ;
            //redondear a 3 decimales
            $imc = round($imc, 3);
            //"<span color=\"rojo\">bajo peso</span>"
            //"<span color='rojo'>bajo peso</span>"
            //'<span color="rojo">bajo peso</span>'
            if($imc < 18.5){
                $descripcion = "<span class=\"blue\">Bajo peso</span>";
            }else if($imc < 24.9){
                $descripcion = "<span class=\"green\">Peso normal</span>";
            }else if($imc < 29.9){
                $descripcion = "<span class=\"yellow\">Sobrepeso</span>";
            }else if($imc < 34.9){
                $descripcion = "<span class=\"rojo\">Obesidad clase I</span>";
            }else if($imc < 39.9){
                $descripcion = "<span class=\"rojo\">Obesidad clase II</span>";
            }else{
                $descripcion = "<span class=\"rojo\">Obesidad clase III</span>";
            }

            
            if($sex == 0){
                if($perimetro < 80){
                     $ingrasa = "<span class=\"green\">Riesgo bajo</span>";
                 }else if($perimetro > 80 and $perimetro < 88){
                     $ingrasa = "<span class=\"yellow\">Riesgo alto</span>";
                 }else{
                     $ingrasa = "<span class=\"rojo\">Riesgo muy alto</span>";
                 }
 
             }else if($sex == 1){
                 if($perimetro < 94){
                     $ingrasa = "<span class=\"green\">Riesgo bajo</span>";
                 }else if($perimetro > 94 and $perimetro < 102){
                     $ingrasa = "<span class=\"yellow\">Riesgo alto</span>";
                 }else{
                     $ingrasa = "<span class=\"rojo\">Riesgo muy alto</span>";
                 }
             }
 
        }else{
            $peso=0;
            $altura=0;
            $descripcion="";
            $ingrasa="";
            $perimetro=0;
        }
    ?>
    <form action="imc.php" method="GET">
        <div>
            <select name="sexo">
                <option value="0">Femenino</option>
                <option value="1">Masculino</option>
            </select>
        </div>
        <div>
            <label for="peso">Peso:</label>
            <input type="text" name="peso" value="<?= $peso ?>">
        </div>
        <div>
            <label for="altura">Altura:</label>
            <input type="text" name="altura" value="<?= $altura ?>">
        </div>
        <div>
            <label for="perimeter">Perimetro de cintura:</label>
            <input type="text" name="perimeter" value="<?= $perimetro ?>">
        </div>

        <div>
            IMC:
            <?php 
                echo $imc;
            ?>
            <div>
                <?php echo $descripcion; ?>
            </div>
            <div>
                <?php echo $ingrasa; ?>
            </div>
        </div>

        <button type="submit" name= "calcular">Calcular</button>
        <button type="reset" name="Borrar">Borrar</button>
    </form>
</body>
</html>