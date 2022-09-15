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
  if ($regalu = mysqli_fetch_array($registros)) {
?>
    <form action="../cambiosDeMailPorBusqueda/pagina11.php" method="post">
      Nombre: <input type="text" name="nombre" value="<?php echo $regalu['nombre'] ?>"><br>
      Mail: <input type="text" name="mail" value="<?php echo $regalu['mail'] ?>"><br>
      <input type="hidden" name="viejomail" value="<?php echo $regalu['mail'] ?>">
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
      <input type="submit" value="Modificar">
    </form>
<?php
  } else
    echo "No existe alumno con dicho correo";
?>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select alum.id, alum.nombre, alum.mail, cur.nombrecurso as curID
                        from alumnos as alum join cursos as cur on cur.idC= alum.codigocurso where mail='$_REQUEST[mail]'") or
    die("Problemas en el select: " . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
      echo "Codigo:" . $reg['id'] . "<br>";
      echo "Nombre:" . $reg['nombre'] . "<br>";
      echo "Mail:" . $reg['mail'] . "<br>";
      echo "Curso:" . $reg['curID'] . "<br>";
      echo "<hr>";
    }
  mysqli_close($conexion);
  ?>
   <form action="pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>

  
</body>

</html>