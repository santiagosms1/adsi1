<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select count(*) as cantidad from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $reg = mysqli_fetch_array($registros);
  echo "La cantidad de cursos disponibles son :" . $reg['cantidad'];
  echo "<br>";
  echo "<br>";
  ?>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select idC,nombrecurso
                        from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo Curso:" . $reg['idC'] . "<br>";
    echo "Nombre Curso:" . $reg['nombrecurso'] . "<br>"."<br>";
    ?>
  <form action="pagina7_1.php" method="post">

    <input type="hidden" name="idCur" value="<?php echo $reg['idC'] ?>">

    <input type="submit" value="✏️">
  </form>
    <?php
    echo "<br>";
    echo "<hr> ";
    echo "<br>";
  }

  mysqli_close($conexion);
  ?>
  <form action="pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>

</body>

</html>