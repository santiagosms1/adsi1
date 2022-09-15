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

  $registros = mysqli_query($conexion, "select idC,nombrecurso from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['idC'] . "<br>";
    echo "Nombre del curso:<a href=\"LinksCursos2.php?codigo=$reg[idC]\">" . $reg['nombrecurso'] . "</a><br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>
<form action="../pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>
</body>

</html>