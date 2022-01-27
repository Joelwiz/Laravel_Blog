<div style="width: 40%; text-align: left">
    <form method="post" action="logout.php" >
        <h2>ENVIO A DOMICILIO</h2>
        <label>Nombre *</label>
        <input type = "text" class = "form-control"
               name = "Usuario" style="width: 100%" required autofocus>
        <label>Apellido *</label>
        <input type = "text" class = "form-control"
               name = "Apellido" style="width: 100%"  required><br>
        <label>Segundo Apellido</label>
        <input type = "text" class = "form-control"
               name = "Apellido2" style="width: 100%"  ><br>
        <label>Telefono(solo llamaremos en caso de duda) *</label>
        <input type = "number" class = "form-control"
               name = "telef" style="width: 100%"  required><br>
        <label>¿Alguna indicacion especial?</label><br>
        <textarea id="dataInfo" name="dataInfo" rows="4" cols="50" style="width: 100%;"></textarea><br><br>
        <h2>DATOS PRINCIPALES</h2>
        <label for="Paises">País: *</label><br>
        <select id="Paises" name="Paises" style="width: 100%" required><br>
            <option value="espa">España</option>
            <option value="ita">Italia</option>
            <option value="fran">Francia</option>
            <option value="ale">Alemania</option>
        </select><br>
        <label for="PE">Provincia/Estado: * </label><br>
        <select id="PE" name="PE" style="width: 100%" required>
            <option value="can">Canarias</option>
            <option value="mad">Madrid</option>
            <option value="bar">Barcelona</option>
        </select><br>
        <label>Localidad *</label>
        <input type = "text" class = "form-control"
               name = "Localidad" style="width: 100%"  required><br>
        <label>Código Postal *</label>
        <input type = "number" class = "form-control"
               name = "CP" style="width: 100%"  required><br>
        <label for="Via">Tipo de Vía: * </label><br>
        <select id="Via" name="Via" style="width: 100%" required>
            <option value="C">Calle</option>
            <option value="CP">Calle Peatonal</option>
            <option value="P">Plaza</option>
        </select><br>
        <label for="NVia">Nombre de la Vía: * </label><br>
        <input type="text" id="NVia" name="NVia" style="width: 100%" required><br><br>
        <button class = "btn btn-lg btn-primary btn-block" style="width: 100%" type = "submit"
                name = "login" href="logout.php">Comprar</button>
    </form>
</div>
<div style="float: right; width: 55%; margin-top: -41.5rem; margin-right: -0.5rem">
    <iframe src="resCarro.php" frameborder="1" style="height: 100%; width:85%"> </iframe>
</div>
