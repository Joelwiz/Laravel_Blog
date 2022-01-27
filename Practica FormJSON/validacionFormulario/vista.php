<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Solicitud de Servicios</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data" id="formulario1" class="needs-validation" novalidate>
        <div class="container">
            <h1>Solicitud de servicios</h1> 
            <h5>Datos actúa como representante</h5>
            <div class="row">
            
                <label for="representante">¿Actúa como representante?</label>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="representante" id="alumno" value ="Alumno">
                        <label class="form-check-label" for="representante">
                            Alumno
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="representante" id="representante" value ="Representante"checked>
                        <label class="form-check-label" for="representante">
                            Representante
                        </label>
                    </div>
                </div>
            </div>
            
            
            
            <h5>Datos del representante</h5>
            <div class="row">
                
                <div class="col-3">
                    <label for="tipoDocumento">Tipo de documento:(*)</label>
                    <select class="form-select" name="tipoDocumento" required>
                        <option value = "NA" selected>Seleccionar</option>
                        <option value="NIF">NIF</option>
                        <option value="DNI">DNI</option>
                    </select>
                    
                </div>
                <div class="col-4">
                    <div><label for="nIdentificacion">Nº de identificación:(*)</label></div>
                    <input type="text" name="nIdentificacion" class="form-control" required>
                    
                </div>
                <div class="col-5">
                    <div><label for="nombre">Nombre:(*)</label></div>
                    <input type="text" name="nombre" class="form-control" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div><label for="apellido1">Primer apellido:(*)</label></div>
                    <input type="text" name="apellido1" class="form-control" required>
                    
                </div>
                <div class="col-6">
                    <div><label for="apellido2">Segundo apellido:(*)</label></div>
                    <input type="text" name="apellido2" class="form-control" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div><label for="enCalidadDe">En calidad de:(*)</label></div>
                    <select class="form-select" name="enCalidadDe" required>
                        <option value = "NA" selected>Seleccionar</option>
                        <option value="Guardador de hecho">Guardador de hecho</option>
                        <option value="Padtria potestad">Padtria potestad</option>
                        <option value="Representante voluntario">Representante voluntario</option>
                        <option value="Tutor o representante legal">Tutor o representante legal</option>
                    </select>
                    
                </div>
                <div class="col">
                    <div><label for="fijo">Teléfono fijo:</label></div>
                    <input type="text" name="fijo" class="form-control">
                </div>
                <div class="col">
                    <div><label for="movil">Teléfono móvil:(*)</label></div>
                    <input type="text" name="movil" class="form-control" required>
                    
                </div>
                <div class="col-4">
                    <div><label for="correo">Correo electrónico:(*)</label></div>
                    <input type="text" name="correo" class="form-control" required>
                    
                </div>
            </div>
            
            
            
            <h5>Domicilio de contacto</h5>
                <div class="row">
                
                    <div class="col-3">
                        <label for="TipoVia">Tipo de vía:(*)</label>
                        <select class="form-select" name="TipoVia" required>
                            <option value = "NA" selected>Seleccionar</option>
                            <option value="Vía">Vía</option>
                            <option value="Calle">Calle</option>
                            <option value="Avenida">Avenida</option>
                        </select>
                        
                    </div>
                    <div class="col-4">
                        <div><label for="nombreVia">Nombre de vía:(*)</label></div>
                        <input type="text" name="nombreVia" class="form-control" required>
                        
                    </div>
                    <div class="col-5">
                        <div><label for="numero">Número:(*)</label></div>
                        <input type="text" name="numero" class="form-control" required>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div><label for="bloque">Bloque:</label></div>
                        <input type="text" name="bloque" class="form-control">
                    </div>
                    <div class="col">
                        <div><label for="escalera">Escalera:</label></div>
                        <input type="text"  name="escalera" class="form-control">
                    </div>
                    <div class="col">
                        <div><label for="piso">Piso:</label></div>
                        <input type="text"  name="piso" class="form-control">
                    </div>
                    <div class="col">
                        <div><label for="portal">Portal:</label></div>
                        <input type="text"  name="portal" class="form-control">
                    </div>
                    <div class="col">
                        <div><label for="letra">Letra:</label></div>
                        <input type="text"  name="letra" class="form-control">
                    </div>
                    <div class="col">
                        <div><label for="puerta">Puerta:</label></div>
                        <input type="text"  name="puerta" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div><label for="complemento">Complemento:</label></div>
                        <input type="text" name ="complemento" class="form-control">
                    </div>
                    <div class="col">
                        <div><label for="fecha">Fecha:</label></div>
                        <input type="date" name="fecha" class="form-control">
                    </div>
                    <div class="col">
                        <div><label for="pais">País:(*)</label></div>
                        <?php
                            $paises = getDatos("json/paises.json");
                            generarSelect($paises, 'paises', '','name_es','name_es');
                        ?>
                        
                    </div>
                    <div class="col-4">
                        <div><label for="provincia">Provincia:(*)</label></div>
                        <?php
                            $provincias = getDatos("json/provincias.json");

                            generarSelect($provincias, 'provincias', '','nombre', 'nombre');

                        ?>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                    <div><label for="isla">Isla:(*)</label></div>
                        <?php
                            $islas = getDatos("json/islas.json");

                            generarSelect($islas, 'islas', '','nombre','nombre');
                        ?>
                        
                    </div>
                    <div class="col">
                        <div><label for="municipio">Municipio:(*)</label></div>
                        <?php
                            $municipios = getDatos("json/municipios.json");

                            generarSelect($municipios, 'municipios', '','nombre','nombre');
                        ?>
                        
                    </div>
                    <div class="col-4">
                        <div><label for="localidad">Localidad:(*)</label></div>
                        <input type="text" name="localidad" class="form-control" required>
                        
                    </div>
                    <div class="col-2">
                        <div><label for="codigoPostal">Código postal:(*)</label></div>
                        <input type="text" name="codigoPostal" class="form-control" required>
                        
                    </div>
                </div>

            
            
            
            <h5>Más datos</h5>
                <div class="form-check">
                    <input type='hidden' value='false' name='huerfano'>
                    <input class="form-check-input" type="checkbox" value="true" id="huerfano" name="huerfano"checked>
                    <label class="form-check-label" for="huerfano">
                        El alumno/a es huérfano absoluto
                    </label>
                </div>
                <div class="form-check">
                    <input type='hidden' value='false' name='administracion'>
                    <input class="form-check-input" type="checkbox" value="true" id="administracion" name ="administracion"checked>
                    <label class="form-check-label" for="administracion">
                    El alumno/a se encuentra régimen de tutela y guarda por la administración
                    </label>
                </div>
            
            
            
            <h5>Alergias, patología o dietas especiales</h5>
                <div class="mb-3">
                    <label for="alergias" class="form-label">Otras Alergias</label>
                    <textarea class="form-control" id="alergias" name="alergias" rows="3"></textarea>
                </div>
            
            
           
                <h5>Datos académicos del alumno/a</h5>
                <label for="itinerario">Seleccione opción</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ciencias" id="salud" value ="ciencias de la salud">
                    <label class="form-check-label" for="salud">
                        Itinerario ciencias de la salud
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="ciencias" id="cientec" value ="científico-tecnológico"checked>
                    <label class="form-check-label" for="cientec">
                        Itinerario científico-tecnológico
                    </label>
                </div>


            
            
            <label for="representante">Bloque 1</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="lengua" disabled="true" value ="Lengua"checked>
                    <label class="form-check-label" for="lengua">
                        Lengua castellana y literatura I
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="filosofia" disabled="true" value ="Filosofia"checked>
                    <label class="form-check-label" for="filosofia">
                        Filosofía
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="EF" disabled="true" value ="Educacion fisica"checked>
                    <label class="form-check-label" for="EF">
                        Educación física
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="mates" disabled="true" value ="Matematicas"checked>
                    <label class="form-check-label" for="mates">
                        Matemáticas I
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="FyQ" disabled="true" value ="Fisica y quimica"checked>
                    <label class="form-check-label" for="FyQ">
                        Física y química
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tutoria" disabled="true" value ="Tutoria"checked>
                    <label class="form-check-label" for="tutoria">
                        Tutoría
                    </label>
                </div>
            
            
                <label for="idiomas">Bloque 2</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="idioma" id="ingles" value ="Ingles">
                    <label class="form-check-label" for="ingles">
                        Primera lengua extranjera (inglés)
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="idioma" id="italiano" value ="Italiano"checked>
                    <label class="form-check-label" for="italiano">
                        Primera lengua extranjera (italiano)
                    </label>
                </div>
            
            
                <label for="optativas1">Bloque 3</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa1" id="bio" value ="Biologia y geologia">
                    <label class="form-check-label" for="bio">
                        Biología y geología
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa1" id="dibujo" value ="Dibujo tecnico"checked>
                    <label class="form-check-label" for="dibujo">
                        Dibujo Técnico I
                    </label>
                </div>
            
            
                <label for="optativas2">Bloque 4</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa2" id="tecnologia" value ="Tecnologia industrial">
                    <label class="form-check-label" for="tecnologia">
                        Tecnología industrial I
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa2" id="cultura" value ="Cultura cientifica"checked>
                    <label class="form-check-label" for="cultura">
                        Cultura científica
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa2" id="ingles2" value ="Ingles">
                    <label class="form-check-label" for="ingles2">
                        Segunda lengua extranjera (inglés)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa2" id="bio2" value ="Biologia y geologia" checked>
                    <label class="form-check-label" for="bio2">
                        Biología y geología(E)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa2" id="dibujo2" value ="Dibujo tecnico" checked>
                    <label class="form-check-label" for="dibujo2">
                        Dibujo Técnico I(E)
                    </label>
                </div>
            
            
                <label for="optativas3">Bloque 5</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa3" id="religion" value ="Religion catolica">
                    <label class="form-check-label" for="religion">
                        Religión Católica
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="optativa3" id="info" value ="Tecnologias de la informacion y la cmunicacion" checked>
                    <label class="form-check-label" for="info">
                        Tecnologias de la información y la cmunicación I
                    </label>
                </div>
            
            
            
            <h5>Medios de difusión</h5>
                <p>CONCENTIMIENTO INFORMADO DE TRATAMIENTO DE IMÁGENES/VOZ DEL ALUMNADO EN CENTROS DOCENTES DE TITULARIDAD PUBLICA DE LA CONCEJERIA DE EDUCACIÓN, UNIVERSIDADES, CULTURA Y DEPORTES.</p>
                <P>De acuerdo con el Reglamento General de Protección de datos y la Ley Orgánica 3/2018, del 5 de diciembre, de Protección de Datos Personales y Garantías de los Derechos Digitales,
                la firma del presente documento se presta voluntariamente el concentimiento inequivoco e informado y se autoriza expresamente al centro docente al "tratamiento de imagen/voz de 
                actividades de los centros de titularidad pública", mediante los siguientes medios (solo se entenderá que conciente la difusión de imágenes/voz por los medios expresamente marcados a 
                continuación).  </P>
                <div class="row">
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente1" id="consiente1" value="Consiente">
                            <label class="form-check-label" for="consiente1">
                                Consiente
                            </label>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente1" id="noConsiente1" value="No Consiente"checked>
                            <label class="form-check-label" for="noConsiente1">
                                No consiente
                            </label>
                        
                        </div>
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-8">
                        <label for="">Página web del centro docente</label>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente2" id="consiente2" value="Consiente">
                            <label class="form-check-label" for="consiente2">
                                Consiente
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente2" id="noConsiente2" value="No Consiente"checked>
                            <label class="form-check-label" for="noConsiente2">
                                No consiente
                            </label>
                        
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-8">
                        <label for="">App de alumnado y familia</label>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente3" id="consiente3" value="Consiente">
                            <label class="form-check-label" for="consiente3">
                                Consiente
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente3" id="noConsiente3" value="No Consiente"checked>
                            <label class="form-check-label" for="noConsiente3">
                                No consiente
                            </label>
                        
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-8">
                        <label for="">Facebook</label>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente4" id="consiente4"value="Consiente">
                            <label class="form-check-label" for="consiente4">
                                Consiente
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="consiente4" id="noConsiente4" value="No Consiente"checked>
                            <label class="form-check-label" for="noConsiente4">
                                No consiente
                            </label>
                        
                        </div>
                    </div>
                    
                </div>
                <p>El concentimiento aquí otorgado podrá ser revocado en cualquier momento ante el propio centro docente, teniendo en 
                    cuenta que dicha revocación no sufrirá efectos retroactivos.
                </p>
                
            
            
                <h5>Documentos Adjuntados</h5>
                
                    <div class="alert alert-warning" role="alert">
                        Aviso:
                        <ul>
                            <li>Los formatos permitidos son jpg, png, otd, txt, pdf, jpeg, doc, docx</li>
                            <li>El tamaño máximo por fichero es de 10MB</li>
                            <li>El nombre de losficheros no debe incluir caracteres acentuados, caracteres con diéresis, la eñe o caracteres
                                especiales: !"#$%&'*,./;<->?@[]¨{}()^´|
                            </li>
                            
                        </ul>
                    </div>
                <h5 class="documentos">Lista de documentos pendientes</h5>
                <hr>
                <div class="row">
                <div class="col-10">
                        <label>Documento</label>
                    </div>
                    <div class="col-2">
                        <label>Acciones</label>
                    </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-6">
                        <label>DNI del alumno o alumna(o de los padres, madres, tutores legales de alumnado sin DNI)(SOLO ALUMNADO NUEVO)</label>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                    
                       <input type="file" class="form-control" name ="DNI" id="DNI" required>
                       
                    </div>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-6">
                        <label>Para el alumno procedente de otros centros, certificación académica del centro de origen en el que se especifique la promoción 
                            de curso o la terminación de estudios con propuesta para titulación.
                        </label>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name = "certificacion" id="certificacion" >
                    </div>
                </div>
                </div>

            
            <br>
            
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary" name="procesar">Procesar</button>     
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary">Cancelar</button>
                </div>
                <div class="col-4"></div>
            
            </div>
            <br>
        </div>
    </form>
    
</body>
</html>