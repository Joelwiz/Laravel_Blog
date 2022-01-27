<?php
 
$res ="";

    function crearSelect($datos, $name){
        echo "<div class='col-xs-4'>";
        echo "<select class = 'form-select' name=\"$name\">";
        foreach ($datos as $dato){
            echo "<option value=\"$dato\">".$dato."</option>";
        }
        echo "</select>";
        echo "</div>";
    }
    
    function calHor($mes,$dia){
        $sign="";
        
        if(($mes=="marzo"&& $dia>20)||($mes=="abril"&& $dia<20)){
            
            $sign = "aries";
        }
        if(($mes=="abril"&& $dia>19)||($mes=="mayo"&& $dia<21)){
            
            $sign = "tauro";
        }
        if(($mes=="mayo"&& $dia>20)||($mes=="junio"&& $dia<21)){
            
            $sign = "geminis";
        }
        if(($mes=="junio"&& $dia>20)||($mes=="julio"&& $dia<23)){
            
            $sign = "cancer";
        }
        if(($mes=="julio"&& $dia>22)||($mes=="agosto"&& $dia<23)){
            
            $sign = "leo";
        }
        if(($mes=="agosto"&& $dia>22)||($mes=="septiembre"&& $dia<23)){
            
            $sign = "virgo";
        }
        if(($mes=="septimbre"&& $dia>22)||($mes=="octubre"&& $dia<23)){
            
            $sign = "libra";
        }
        if(($mes=="octubre"&& $dia>22)||($mes=="noviembre"&& $dia<23)){
           
           $sign = "escorpio";
        }
        if(($mes=="noviembre"&& $dia>21)||($mes=="diciembre"&& $dia<22)){
            
            $sign = "sagitario";
        }
        if(($mes=="diciembre"&& $dia>21)||($mes=="enero"&& $dia<20)){
            
            $sign = "capricornio";
        }
        if(($mes=="enero"&& $dia>19)||($mes=="febrero"&& $dia<19)){
           
           $sign = "acuario";
        }
        if(($mes=="febrero"&& $dia>18)||($mes=="marzo"&& $dia<21)){
            
            $sign = "piscis";
        }
        return $sign;
    }
    function show(){
        global $hor;
        
        if(isset($_POST["calcular"])){
            $mes = $_POST["mes"];
            $dia = $_POST["dia"];
            
            $res = calHor($mes, $dia);

            echo "<h1 class = 'texto2' >".strtoupper($res)."</h1>";
            foreach($hor as $zodiaco=>$desc){
                if($res == $zodiaco){
                    echo "<div class='texto'>";
                    echo $desc;  
                    echo "</div>" ; 
                }
            }
            echo "<img class='img container' src = 'imagenes/$res.png'/>";
        }else if(isset($_POST["todo"])){
            foreach($hor as $zodiaco=>$desc){
                
                echo "<div class='texto container'>";
                    echo "<div class='row'>";
                        echo "<div class='col'>";
                            echo "<img class='img container' src = 'imagenes/$zodiaco.png'/>";
                        echo "</div>";
                        echo "<div class='col'>";
                            echo "<h1>".strtoupper($zodiaco)."</h1>"; 
                            echo $desc; 
                        echo "</div>" ;    
                    echo "</div>" ;
                echo "</div>" ; 
                
            }
        }
    }
   
