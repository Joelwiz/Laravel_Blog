<?php 
    include "funciones.php"

?>

<?php

    $mes = empty($_POST["mes"]) ? "enero" : $_POST["mes"];
    $dia = empty($_POST["dia"]) ? "1" : $_POST["dia"];
    

    $meses =['enero', 'febrero','marzo','abril','mayo','junio','julio','agosto','septiembre', 'octubre', 'noviembre', 'diciembre'];
    
    
    $hor = [ 'Aries' => 'Aries, eres una persona muy romántica.', 
                    'Tauro' => 'Tauro, eres una persona que se automejora.', 
                    'Geminis' => 'Gemini, eres una persona muy estudiosa.', 
                    'Cancer'=> 'Cancer, eres una persona muy sensible.', 
                    'Leo' => 'Leo, vas a paso lento pero seguro por la vida.', 
                    'Virgo' => 'Virgo, eres una persona muy organizada.', 
                    'Libra' => 'Libra,  buscas el  equilibrio en  tu vida personal.', 
                    'Escorpio' => 'Escorpio, eres una persona muy equilibrada.', 
                    'Sagitario' =>'Sagitario, eres una persona muy compleja.', 
                    'Capricornio' => 'Capricornio,  tienes mucha paciencia con otros.', 
                    'Acuario' => 'Acuario, eres una persona muy trabajadora.', 
                    'Piscis' => 'Piscis, tratas de ayudar a todos los demas.'];
   
     $dias = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];


?>

<?php
    include "horoscopo_vista.php"

?>
