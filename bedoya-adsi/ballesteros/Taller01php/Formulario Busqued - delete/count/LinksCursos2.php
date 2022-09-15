<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  function retornarConexion()
  {
    $conexion=mysqli_connect("localhost","root","","base1") or
      die("Problemas con la conexión");  
    return $conexion;
  }

  $registros = mysqli_query($conexion, "select nombre from alumnos where codigocurso=$_REQUEST[codigo]") or
    die("Problemas en el select:" . mysqli_error($conexion));

  echo "Alumnos inscriptos a dicho curso<br>";
  while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['nombre'] . " <br> ";
    echo " <br> "; 
  }

  mysqli_close($conexion);
  ?>
<form action="../pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>
</body>

</html>