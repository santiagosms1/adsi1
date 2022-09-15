<html>

<head>
  <title>Problema</title>
</head>

<body>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre, mail, codigocurso, contraseña, fechanac from alumnos
                        where id='$_REQUEST[id]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($regalu = mysqli_fetch_array($registros)) {
?>
    <form action="../cambiosDeMailPorBusqueda/pagina11.php" method="post">
      Nombre: <input type="text" name="nombre" value="<?php echo $regalu['nombre'] ?>"><br><br>
      Mail: <input type="text" name="mail" value="<?php echo $regalu['mail'] ?>"><br><br>
      <input type="hidden" name="viejomail" value="<?php echo $regalu['mail'] ?>">
      Fecha: <input type="date" name="fech" value="<?php echo $regalu['fechanac'] ?>"><br><br>

      Curso: <select name="codigocurso">
      <?php
          $registros = mysqli_query($conexion, "select * from cursos") or
            die("Problemas en el select:" . mysql_error());
          while ($reg = mysqli_fetch_array($registros)) {
            if ($regalu['codigocurso'] == $reg['idC'])
              echo "<option value=\"$reg[idC]\" selected>$reg[nombrecurso]</option>";
            else
              echo "<option value=\"$reg[idC]\">$reg[nombrecurso]</option>";
          }
?>
      </select>
      <br>
      <br>
      <input type="submit" value="Modificar">
    </form>
<?php
  } else
    echo "No existe alumno con dicho correo";
?>

   <form action="pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>

  
</body>

</html>