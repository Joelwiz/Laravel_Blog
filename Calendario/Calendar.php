<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .dayNumber {
        display: inline-block;
        width: 14%;
        height: 8.5%;
        border: 1px solid black;
        text-align:center;
        color: white;
        background-color: #9B59B6;
    }
    .dayName {
        color: white;
        background-color: #5D3F6A;
    }
    .texto{
        text-align:center;
    }
    .container{
        color: white;
        width: 100%;
        /*height: 100%;*/
    }
    body{
        background-color: #763568;
    }

</style>
<body>
<div class="container">
    <!--
    <script>
        alert("¡Bienvenido al calendar! Por favor, introduzca el número de un mes y un año para comenzar.")
    </script>-->
    <h1 class="texto">¡Bienvenido al calendario! Por favor, introduzca el número de un mes y un año para comenzar.</h1>
    <form action="Calendar.php" method="post">
        <label class="form-label" for="mes">Introduzca un mes del 1 al 12:</label>
        <input type="number" class="form-control" id="mes" name="mes" min="1" max="12" pattern="^[0-9]+"><br>
        <label class="form-label" for="year">Introduzca un año válido:</label>
        <input type="number" class="form-control" id="year" name="year" min="1" pattern="^[0-9]+"><br>
        <button type="submit" class="btn btn-dark form-control" name="generar">Computar Datos</button>
    </form>
<?php
class Calendar{
    public $month;
    public $year;

    public function __construct($month, $year){
        $this->month = $month;
        $this->year = $year;
        $this->calendarGen($month, $year);

    }

    public function calendarGen($month, $year){
        $fecha = $year."-".$month."-1";
        $count = 1;
        $baseDay = date('w', strtotime($fecha));
        $mD = date("t", strtotime($fecha));
        $dayName = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];

        //Ponemos los nombres de los días semanales
        foreach ($dayName as $dia) {
            echo "<div class='dayNumber dayName'>".$dia."</div>";
        }

        //Empezamos a colocar los días (números)
        for ($i = 1; $i < $baseDay; $i++) {
            echo "<div class='dayNumber'>&nbsp;</div>";
            $count++;
        }

        //Validación para que no pase de 7 a la vez
        for ($j = 1; $j <= $mD; $j++) {
            echo "<div class='dayNumber'>$j</div>";
            if (($count % 7) == 0){
                echo "<br>";
                $count++;
            }
        }

        /*
        if ($dayOfWeek != 7) {

            $remainingDays = 7 - $dayOfWeek;
            $calendar .= "<td colspan='$remainingDays' class='not-month'>&nbsp;</td>";

        }*/

    }

}
if(isset($_POST["generar"])){
    //Validaciones aquí si quisieramos quitar el min=1 y max=12 de arriba
    /*if($_POST["mes"]<1 && $_POST["mes"]>12){
        ?>
    <script>
        alert("No puedes darme meses menores de 0 o mayores de 12.")
    </script>

    <?php
    }else{*/
        $month =$_POST["mes"];
    /*}

    if($_POST["year"]<0){
    ?>
    <script>
        alert("No puedes darme un año inferior a 1.")
    </script>

    <?php
    }

    else{*/
        $year = $_POST["year"];
    //}
    $c = new Calendar($month,$year);

}
?>
</div>
</body>



