<html>

<head>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'Sesion cerrada.';
header('Refresh: 2; URL = index.php');
?>
<body>
    <button type="submit" href="login.php">Volver</button>
</body>
