<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyCode</title>
</head>
<body>
    <form action="" method="post">
        <!-- Parametro que va a recibir -->
        Ingrese un número
        <br>
        <input type="number" name="key" >
        <br>
        <br>
        <input type="submit" value="Registrar">
    </form>
    <?php
    if ($_POST) {
        $num = $_REQUEST['key'];
        echo "Esa clave corresponde a la tecla ";
        printf("%c<br>", $num);
    }
    
    ?>
</body>
</html>