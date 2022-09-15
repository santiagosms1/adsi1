<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "delete from alumnos where id=$_REQUEST[id]") or
    die("Problemas en el select:" . mysqli_error($conexion));

  echo "Se efectuó el borrado de ese alumno.";

  mysqli_close($conexion);
  ?>
   <form action="pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>
</body>

</html>