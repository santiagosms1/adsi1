<?php
if (isset($_REQUEST['pos']))
  $inicio = $_REQUEST['pos'];
else
  $inicio = 0;
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select alu.id ,
                                               nombre,
                                               mail,
                                               codigocurso, 
                                               nombrecurso 
		                                      from alumnos as alu
                                          inner join cursos as cur on cur.idC=alu.codigocurso
                                          limit $inicio,2") or
    die("Problemas en el select:" . mysqli_error($conexion));

    
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Codigo:" . $reg['id'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    $registros1 = mysqli_query($conexion, "select idC,nombrecurso from cursos where idC=$reg[codigocurso]") or
    die("Problemas en el select:" . mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros1)) {
        echo "Nombre del curso:<a href=\"../Formulario Busqued - delete/count/LinksCursos2.php?codigo=$reg[idC]\">" . $reg['nombrecurso'] . "</a><br>";}
        echo "<hr>";
    }
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - 2;
    echo "<a href=\"paginacionDeRegistros.php?pos=$anterior\">Anteriores </a>";
    echo "<br>";
    echo "<br>";
  }
  if ($impresos == 2) {
    $proximo = $inicio + 2;
    echo "<a href=\"paginacionDeRegistros.php?pos=$proximo\">Siguientes</a>";
    echo "<br>";
    echo "<br>";

  } else
    echo "siguientes";
  mysqli_close($conexion);
  ?>
<form action="../Formulario Busqued - delete/pagina1.php" method="post">
  <input type="submit" value="Inicio">
</form>
</body>

</html>