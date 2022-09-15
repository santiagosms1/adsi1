<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from alumnos
    where mail='$_REQUEST[mail]'") or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
?>
<form action="pagina3.php" method="post">
Ingrese nuevo mail:
<input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
<input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
<br>
Nombre:
<input type="text" name="nombre" value="<?php echo $reg['nombre'] ?>">
<br>
Contraseña:
<input type="text" name="contraseña" value="<?php echo $reg['contraseña'] ?>">
<br>
Seleccione el curso:
<select name="codigocurso">
<?php
require_once('../function.php');
$conexionH = retornarConexion();

$registros = mysqli_query($conexionH, "select idC,nombrecurso from cursos") or
die("Problemas en el select:" . mysqli_error($conexionH));
while ($reg = mysqli_fetch_array($registros)) {
echo "<option value=\"$reg[idC]\">$reg[nombrecurso]</option>";
}
?>


</select>
<br>

<input type="submit" value="Modificar">
</form>
<hr>
<form action="pagina1.html" method="post">
<input type="submit" value="volver">
</form>
<hr>
<form action="../Formulario Busqued - delete/pagina1.php" method="post">
<input type="submit" value="Menu Principal">
</form>

<?php
} else
echo "No existe alumno con dicho mail";
?>
</body>

</html>