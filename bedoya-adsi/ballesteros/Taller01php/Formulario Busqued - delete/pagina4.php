<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php


  $fechanacimiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso, contraseña, fechanac) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso], '$_REQUEST[password]','$fechanacimiento')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.👌";
  ?>
  <form action="pagina1.php" method="post">
    <br>
    <input type="submit" value="index">
  </form>
</body>

</html>