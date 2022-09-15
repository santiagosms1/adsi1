<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into cursos(nombrecurso) values 
                       ('$_REQUEST[nombrecurso]')")
    or die("Problemas en el select " . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El curso fue inscrito con exito. 👌";
  ?>
  <form action="pagina1.php" method="post">
    <br>
    <input type="submit" value="index">
  </form>
</body>

</html>