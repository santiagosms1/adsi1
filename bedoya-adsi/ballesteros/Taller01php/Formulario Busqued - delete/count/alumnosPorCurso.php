<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  require_once('../../function.php');
  
    $conexion =  retornarConexion();
 
  $registros = mysqli_query($conexion, "select count(alu.id) as cantidad,
                                               nombrecurso, nombre
                                          from alumnos as alu
                                          inner join cursos as cur on cur.idC=alu.codigocurso
                                          group by alu.codigocurso") or
    die("Problemas en el select:" . mysqli_error($conexion));
  while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
    echo "Cantidad de inscriptos:" . $reg['cantidad'] . "<br>";
    echo "Cantidad de inscriptos:" . " " . $reg['nombre'] . " - - -" ."<br>";

    echo "<hr>";
  }
  mysqli_close($conexion);
  ?>
  <form action="../pagina1.php">
    <input type="submit" value="Index">
  </form>
</body>

</html>