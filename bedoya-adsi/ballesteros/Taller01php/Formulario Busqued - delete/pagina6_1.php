<html>

<head>
  <title>Problema</title>
</head>

<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
<link rel="stylesheet" href="../../public/css/todoForm.css">
<body>
  <div class="my-3 container border border-light rounded">
<?php
  require_once('../../sources/function.php');
  
    $conexion =  retornarConexion();
 
  $registros = mysqli_query($conexion, "select nombre FROM alumnos where codigocurso = '$_GET[codigo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    
  while ($reg = mysqli_fetch_array($registros)) {
    // echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
    echo $reg['nombre']. "<br>";
    
  }
  
  mysqli_close($conexion);
  ?>
  <form action="alumnosPorCurso.php">
    <input class="btn btn-warning" type="submit" value="Volver">
  </form>


  <form action="../index.php">
    <input class="btn btn-success" type="submit" value="Inicio">
  </form>
</div>
</body>

</html>