<html>

<head>
  <title>Problema</title>
</head>

<body>
<?php

require_once ("../function.php");

$conexion = retornarConexion();
  $registros =mysqli_query($conexion, "select * from cursos where idC=$_REQUEST[idCur]") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    ?>
    <form action="pagina7_2.php" method="post">
        Id Curso: <input type="text" name="cod" value="<?php echo $reg['idC'] ?>" disabled><br><br>
        <input type="hidden" name="idC" value="<?php echo $reg['idC'] ?>">
        Nombre: <input type="text" name="name" value="<?php echo $reg['nombrecurso'] ?>"><br><br>
        <input type="submit" value="Modificar">
    </form>
    <?php
  }

  mysqli_close($conexion);
  ?>
   <form action="pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>
</body>

</html>