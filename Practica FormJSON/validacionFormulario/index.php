<?php 
    include "funciones.php"
?>
<?php 
        // Arrays para guardar mensajes y errores:
    $aErrores = array();
    $aMensajes = array();
   // Patrón para usar en expresiones regulares 
    $patronTexto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
    $patronMovil="/^6[0-9]{8}$/";
    $patronFijo= "/^[9|8|6|7][0-9]{8}$/";
    $patronDNI="/^[0-9]{8}[A-Za-z]{1}$/";
    $patronNVia="/^[0-9]$/";
    $patronCodigo="/^[0-9]{5}$/";
    $patronLetra="/^[A-Za-z]{1}$/";
    //$patronNumero="/^[0-9]{2}$/";
   // Comprobar si se ha enviado el formulario:
    if( !empty($_POST) ){
       
       // Comprobar si llegaron los campos requeridos:
        if( isset($_POST["procesar"])){
            //tipo de documento
            if( $_POST['tipoDocumento']==='NA' ){
               $aErrores[] = "Debe especificar el tipo del documento";
            }
            //DNI
            if( empty($_POST['nIdentificacion']) )
               $aErrores[] = "Debe especificar el número de identificación";
            else{
               
                if( preg_match($patronDNI, filtrado($_POST['nIdentificacion'])) )
                   $aMensajes[] = "Número de identificación: [".$_POST['nIdentificacion']."]";
                else
                   $aErrores[] = "El número de identificación debe contener 8 dígitos y una letra";
            }
           // Nombre
            if( empty($_POST['nombre']) )
               $aErrores[] = "Debe especificar el nombre";
            else{
               
                if( preg_match($patronTexto, filtrado($_POST['nombre'])) )
                   $aMensajes[] = "Nombre: [".$_POST['nombre']."]";
                else
                   $aErrores[] = "El nombre sólo puede contener letras y espacios";
            }
           // Apellidos
            if( empty($_POST['apellido1']) )
               $aErrores[] = "Debe especificar el primer apellido";
            else{
              
                if( preg_match($patronTexto, filtrado($_POST['apellido1'])) )
                   $aMensajes[] = "Primer apellido: [".$_POST['apellido1']."]";
                else
                   $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }
            if( empty($_POST['apellido2']) )
               $aErrores[] = "Debe especificar el segundo apellido";
            else{
              
                if( preg_match($patronTexto, filtrado($_POST['apellido2'])) )
                   $aMensajes[] = "Segundo Apellido: [".$_POST['apellido2']."]";
                else
                   $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }
            //En Calidad de
            if( $_POST['enCalidadDe']==='NA' ){
                $aErrores[] = "Debe seleccionar una opción válida en el campo En calidad de";
            }
            //Telefono
            if( empty($_POST['movil']) )
               $aErrores[] = "Debe especificar el teléfono móvil";
            else{
               
                if( preg_match($patronMovil, filtrado($_POST['movil'])) )
                   $aMensajes[] = "Teléfono móvil: [".$_POST['movil']."]";
                else
                   $aErrores[] = "El móvil debe ser numérico y de 9 dígitos";
            }
            if( !empty($_POST['fijo']) ){
                if( preg_match($patronFijo, filtrado($_POST['fijo'])) )
                $aMensajes[] = "Teléfono fijo: [".$_POST['fijo']."]";
                else
                $aErrores[] = "El Teléfono fijo debe ser numérico y de 9 dígitos";
            }
           
            //Correo
            if( empty($_POST['correo']) )
               $aErrores[] = "Debe especificar el correo";
            else{
              
                if( is_valid_email(filtrado($_POST['correo'])))
                   $aMensajes[] = "Correo: [".$_POST['correo']."]";
                else
                   $aErrores[] = "El correo no es correcto";
            }
            //via
            if( $_POST['TipoVia']==='NA' ){
                $aErrores[] = "Debe seleccionar el tipo de vía";
            }
            if( empty($_POST['nombreVia']) )
               $aErrores[] = "Debe especificar el nombre de la vía";
            else{
              
                if( preg_match($patronTexto, filtrado($_POST['nombreVia'])) )
                   $aMensajes[] = "Nombre de vía: [".$_POST['nombreVia']."]";
                else
                   $aErrores[] = "El nombre de la vía sólo puede contener letras y espacios";
            }
            if( empty($_POST['numero']) )
               $aErrores[] = "Debe especificar el número de la vía";
            else{
           
                if( preg_match($patronNVia, filtrado($_POST['numero'])) )
                   $aMensajes[] = "Número de vía: [".$_POST['numero']."]";
                else
                   $aErrores[] = "El número de la vía sólo puede contener números";
            }
            
            if( !empty($_POST['bloque']) ){
                if( preg_match($patronLetra, filtrado($_POST['bloque'])) )
                $aMensajes[] = "Bloque: [".$_POST['bloque']."]";
                else
                $aErrores[] = "El bloque solo puede ser una letra";
            }

            if( !empty($_POST['escalera']) ){
                if( preg_match($patronNVia, filtrado($_POST['escalera'])) )
                $aMensajes[] = "Escalera: [".$_POST['escalera']."]";
                else
                $aErrores[] = "La escalera solo puede ser numérico";
            }

            if( !empty($_POST['piso']) ){
                if( preg_match($patronNVia, filtrado($_POST['piso'])) )
                $aMensajes[] = "Piso: [".$_POST['piso']."]";
                else
                $aErrores[] = "El piso solo puede ser numérico";
            }

            if( !empty($_POST['portal']) ){
                if( preg_match($patronNVia, filtrado($_POST['portal'])) )
                $aMensajes[] = "Portal: [".$_POST['portal']."]";
                else
                $aErrores[] = "El portal solo puede ser numérico";
            }

            if( !empty($_POST['letra']) ){
                if( preg_match($patronLetra, filtrado($_POST['letra'])) )
                $aMensajes[] = "Letra: [".$_POST['letra']."]";
                else
                $aErrores[] = "La Letra solo puede ser una letra";
            }

            if( !empty($_POST['puerta']) ){
                if( preg_match($patronNVia, filtrado($_POST['puerta'])) )
                $aMensajes[] = "Puerta: [".$_POST['puerta']."]";
                else
                $aErrores[] = "La puerta solo puede ser numérico";
            }

            //localidad
            if( empty($_POST['localidad']) )
               $aErrores[] = "Debe especificar la localidad";
            else{
               
                if( preg_match($patronTexto, filtrado($_POST['localidad'])) )
                   $aMensajes[] = "Localidad: [".$_POST['localidad']."]";
                else
                   $aErrores[] = "La localidad sólo puede contener letras y espacios";
            }
            if( empty($_POST['codigoPostal']) )
               $aErrores[] = "Debe especificar el código postal";
            else{
               
                if( preg_match($patronCodigo, filtrado($_POST['codigoPostal'])) )
                   $aMensajes[] = "Código postal: [".$_POST['codigoPostal']."]";
                else
                   $aErrores[] = "El código postal solo puede contener números";
            }
        
        }else{
           echo "<p>No se han especificado todos los datos requeridos.</p>";
        }
       // Si han habido errores se muestran
        if( count($aErrores) > 0 ){
           echo "<p>ERRORES ENCONTRADOS:</p>";
           // Mostrar los errores:
            for( $contador=0; $contador < count($aErrores); $contador++ )
               echo $aErrores[$contador]."<br/>";
        }elseif( count($aErrores) === 0 ){
            
            
            echo "Su solicitud será procesada. En breve nos pondremos
            en contacto con uds para facilitarle más información";
        }
    }
?>
<?php 

    if(isset($_POST['procesar'])) {
        $file = "json/datos.json";
        $datos =array(
            "representante" => $_POST['representante'],
            "tipoDocumento" =>$_POST['tipoDocumento'],
            "nIdentificacion" => $_POST['nIdentificacion'],
            "nombre" => $_POST['nombre'],
            "apellido1" => $_POST['apellido1'],
            "apellido2" => $_POST['apellido2'],
            "enCalidadDe" => $_POST['enCalidadDe'],
            "fijo" => $_POST['fijo'],
            "movil" => $_POST['movil'],
            "correo" => $_POST['correo'],
            "TipoVia" => $_POST['TipoVia'],
            "nombreVia" => $_POST['nombreVia'],
            "numero" => $_POST['numero'],
            "bloque" => $_POST['bloque'],
            "escalera" => $_POST['escalera'],
            "piso" => $_POST['piso'],
            "portal" => $_POST['portal'],
            "letra" => $_POST['letra'],
            "puerta" => $_POST['puerta'],
            "complemento" => $_POST['complemento'],
            "fecha" => $_POST['fecha'],
            "paises" => $_POST['paises'],
            "provincias" => $_POST['provincias'],
            "islas" => $_POST['islas'],
            "municipios" => $_POST['municipios'],
            "localidad" => $_POST['localidad'],
            "codigoPostal" => $_POST['codigoPostal'],
            "huerfano" => $_POST['huerfano'],
            "administracion" => $_POST['administracion'],
            "alergias" => $_POST['alergias'],
            "ciencias" => $_POST['ciencias'],
            "idioma" => $_POST['idioma'],
            "optativa1" => $_POST['optativa1'],
            "optativa2" => $_POST['optativa2'],
            "optativa3" => $_POST['optativa3'],
            "consiente1" => $_POST['consiente1'],
            "consiente2" => $_POST['consiente2'],
            "consiente3" => $_POST['consiente3'],
            "consiente4" => $_POST['consiente4']
        );
        $json_string = json_encode($datos);
        file_put_contents($file, $json_string);
        //echo $json_string;
    }
?>
<?php
if(isset($_POST['procesar'])) {
    if ($_FILES['DNI']['error'] == 0) { //Valida si no hay errores
		$dir = "documentos/"; //Directorio de carga
		$tamanio = 100000; //Tamaño permitido en kb
		$permitidos = array('jpg', 'png','txt','odt','pdf','jpeg','doc','docx' ); //Archivos permitido
        $nombre=$_FILES["DNI"]["name"];
        $guardar = $_POST['nIdentificacion'].'-'.$nombre;
		$ruta_carga = $dir . $guardar;
		//Obtenemos la extensión del archivo
		$arregloArchivo = explode(".", $_FILES['DNI']['name']);
		$extension = strtolower(end($arregloArchivo));
		
		if (in_array($extension, $permitidos)) { //Valida si la extensión es permitida
			
			if ($_FILES['DNI']['size'] < ($tamanio * 1024)) { //Valida el tamaño
				
				//Valida si no existe la carpeta y la crea
				if (!file_exists($dir)) {
					mkdir($dir, 0777);
				}
				
				if (move_uploaded_file($_FILES['DNI']['tmp_name'], $ruta_carga)) {
					echo " El archivo 1 se cargó correctamente";
					} else {
					echo " Error al cargar archivo 1";
				}
				} else {
				echo " Archivo 1 excede el tamaño permitido";
			}
			} else {
			echo " Archivo 1 no permitido";
		}
		} else {
		echo " No enviaste archivo 1";
	}
    if ($_FILES['certificacion']['error'] == 0) { //Valida si no hay errores
		$dir = "documentos/"; //Directorio de carga
		$tamanio = 100000; //Tamaño permitido en kb
		$permitidos = array('jpg', 'png','txt','odt','pdf','jpeg','doc','docx' ); //Archivos permitido
        $nombre=$_FILES["certificacion"]["name"];
        $guardar = $_POST['nIdentificacion'].'-'.$nombre;
		$ruta_carga = $dir . $guardar;
		//Obtenemos la extensión del archivo
		$arregloArchivo = explode(".", $_FILES['certificacion']['name']);
		$extension = strtolower(end($arregloArchivo));
		
		if (in_array($extension, $permitidos)) { //Valida si la extensión es permitida
			
			if ($_FILES['certificacion']['size'] < ($tamanio * 1024)) { //Valida el tamaño
				
				//Valida si no existe la carpeta y la crea
				if (!file_exists($dir)) {
					mkdir($dir, 0777);
				}
				
				if (move_uploaded_file($_FILES['certificacion']['tmp_name'], $ruta_carga)) {
					echo " El archivo 2 se cargó correctamente";
					} else {
					echo " Error al cargar archivo 2";
				}
				} else {
				echo " Archivo 2 excede el tamaño permitido";
			}
			} else {
			echo " Archivo 2 no permitido";
		}
		} else {
		echo " No enviaste archivo 2";
	}
}
?>
<?php 
    include "vista.php"
?>
