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
 
  $registros = mysqli_query($conexion, "select count(alu.id) as cantidad,
                                               idC, nombrecurso, nombre
                                          from alumnos as alu
                                          inner join cursos as cur on cur.idC=alu.codigocurso
                                          group by alu.codigocurso") or
    die("Problemas en el select:" . mysqli_error($conexion));
  while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre del curso:<a href=\"pagina6.1.php?codigo=$reg[idC]\">" . $reg['nombrecurso'] . "</a><br>";
   echo "hola";
    echo "Cantidad de inscriptos:" . $reg['cantidad'] . "<br>";
    echo "<hr>";
  }
  
  mysqli_close($conexion);
  ?>
  <form action="../index.php">
    <input class="btn btn-primary" type="submit" value="Inicio">
  </form>
</div>
</body>

</html>