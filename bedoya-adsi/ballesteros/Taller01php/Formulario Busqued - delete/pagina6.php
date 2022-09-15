<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select count(*) as cantidad from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $reg = mysqli_fetch_array($registros);
  echo "La cantidad de alumnos inscriptos son :" . $reg['cantidad'];
  echo "<br>";
  echo " - - - - - - - - - - - - - - - - - - - - - ";
  echo "<br>";
  echo "<br>";
  ?>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select alum.id, alum.nombre, alum.mail, alum.codigocurso, cur.nombrecurso as curId
                        from alumnos as alum inner join cursos as cur on cur.idC= alum.codigocurso") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "ID alumno:" . $reg['id'] . "<br>";
    echo "Nombre alumno:" . $reg['nombre'] . "<br>";
    echo "Dirección email:" . $reg['mail'] . "<br>";
    echo "Nombre Curso:" . $reg['curId'] . "<br>";
    echo "<br>";
   
    ?>
    <form action="pagina6_2.php" method="post">

      <input type="hidden" name="id" value="<?php echo $reg['id'] ?>">
      <input type="submit" name="" value="✏️">
    </form>
    <form action="pagina6_1.php" method="post">

      <input type="hidden" name="id" value="<?php echo $reg['id'] ?>">
      <input type="submit" name="" value="🗑️">
    </form>
    <?php
     echo " - - - - - - - - - - - - - - - - - - - - - ";
     echo "<br>";
  }

  mysqli_close($conexion);
  ?>
  <form action="pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>

</body>

</html>