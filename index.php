<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<form method="post" action="php.php">
        <hr>
        Valor<input type="text" name="valor">
        <br>
        <hr>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Apaga">
    </form>
</body>
</html>