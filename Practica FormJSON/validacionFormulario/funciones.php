<?php
    function getDatos($ficero){

        $datosJSON = file_get_contents($ficero); 

        $datosArray = json_decode($datosJSON, true); 

        return $datosArray;
    }

    function generarSelect($datos, $name, $id,$value, $descripcion,$selected =""){
        echo "<select class='form-select' name='$name' id='$id' required>";
        foreach ($datos as $dato) {
            $select = $selected == $dato[$value] ? "selected": "";
            echo "<option value='".$dato[$value]."'$select>".$dato[$descripcion]."</option>";
        }
        echo "</select>";
    }

    function filtrado($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    function is_valid_email($str){
        return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }

?>