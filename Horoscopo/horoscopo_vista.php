<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Calcula tu horóscopo"/>
    <meta name="author" content="Iris López" />
    <meta name="keywords" content="horoscopo, calcular, zodiaco, signos"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Horóscopos</title>

    <style>
        body{
            padding-top:60px;
            background-color: violet;
        }
       .container{
   
            display: flex;
            justify-content: center;
            
        }
        .button{
            margin-top: 20px;
        }
        .img{
            width: 300px;
            height: 200px;
            margin-top: 20px;
            text-align: left;
        }
        .texto{
            margin-top: 20px;
            margin-bottom: 20px;
            text-align:center;
            color: lightblue;
        }
        .texto2{
            margin-top: 20px;
            text-align:center;
            color: lightblue;
        }
        .sep{   
            margin: 10px;
        }
      
    </style>

</head>
<body>
    <div class="container">

        <form action="horoscopo.php" method="post">
            <h1 class="texto" >Horóscopo Online</h1>
            
            <div class="container">
                    
                <?php
                    crearSelect($meses, "mes");
                    crearSelect($dias, "dia");
                ?>
            </div>
            <div class="container ">
                <input class="button btn btn-light sep" type="submit" value="Calcular" name="calcular">
                <input class="button btn btn-light sep" type="submit" value="Ver todos" name="todo">
            </div>
            
          
            <div>
                <?php
                    show();
                ?>
            </div>
            

        </form>
    </div>
</body>
</html>