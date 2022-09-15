<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quejas</title>
</head>
<body>
    <form action="almacerQueja.php" method="post">
        Nombre y Apellido:
        <br>
        <input type="text" name="name" required="required">
        <br>
        Escriba su queja:
        <br>
        <textarea name="queja"  cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a href="mostrarQueja.php">Ver toda la fila de quejas</a>
</body>
</html>