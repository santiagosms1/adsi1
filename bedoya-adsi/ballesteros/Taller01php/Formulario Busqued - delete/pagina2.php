<html>

<head>
  <title>Problema</title>
</head>

<body>
  <h1>Registro de Alumnos</h1>
  <form action="pagina4.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre" required>
    <br>
    <br>
    Ingrese mail:
    <input type="email" name="mail" required><br>
    <br>
    Seleccione el curso:
    <select name="codigocurso">
      <?php
      require_once('../function.php');
      $conexion = retornarConexion();

      $registros = mysqli_query($conexion, "select idC,nombrecurso from cursos") or
        die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {
        echo "<option value=\"$reg[idC]\">$reg[nombrecurso]</option>";
      }
      ?>
  
      
    </select>
    <br>
    <br>
    Ingrese la fecha de nacimiento (dd/mm/aaaa):
    <input type="text" name="dia" size="2">
    <input type="text" name="mes" size="2">
    <input type="text" name="anio" size="4">
    <br>
    <br>
    Cree la contraseña de su cuenta:
    <br>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit" value="Registrar">
  </form>
  <form action="pagina1.php" method="post">
    <br>
    <input type="submit" value="index">
  </form>
</body>

</html>