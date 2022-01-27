    <?php
        $first = empty($_REQUEST["first"]) ? "0" : $_REQUEST["first"];
        $second = empty($_REQUEST["second"]) ? "0" : $_REQUEST["second"];
        $resultado= 0;
        
        if(isset($_REQUEST["operadores"])){
            $operadores = $_REQUEST["operadores"];

            if($operadores == "+"){
                $resultado = $first+$second;
            }else if($operadores == "-"){
                $resultado = $first-$second;
            } else if($operadores == "*"){
                $resultado = $first*$second;
            } else if($operadores == "/"){
                $resultado = $first/$second;
            } else if($operadores == "sqrt"){
                if($second == 0){
                    $resultado = sqrt($first);
                }else{
                    $resultado = sqrt($second);
                }
            }else if($operadores == "log"){
                if($second == 0){
                    $resultado = log($first);
                }else{
                    $resultado = log($second);
                }
            }else if($operadores == "power"){
                $resultado = pow($first,$second);
            } else if($operadores == "clear"){
                $first = 0;
                $second = 0;
                $resultado = 0;
            }else {
                echo "Elija numeros";
            } 
        }

        //echo "El resultado es igual a: ".$resultado;

        //print_r($_REQUEST);

       include "cal_vista.php" 
    ?>

