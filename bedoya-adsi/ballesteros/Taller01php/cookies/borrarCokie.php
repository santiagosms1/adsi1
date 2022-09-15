<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  if (isset($_COOKIE['noticias']))
    echo $_COOKIE['noticias'] . "<br>";
  else {
    ?>
    <form method="post" action="borrado.php">
      Configuracion del titular del sitio:<br>
      <input type="radio" name="radio1" value="Noticias Politicas">Noticias Políticas.<br>
      <input type="radio" name="radio1" value="Noticias Economicas">Noticias Económicas.<br>
      <input type="radio" name="radio1" value="Noticias Deportivas">Noticias Deportivas.<br>
      <input type="submit" value="Confirmar">
    </form>
  <?php
  }
  ?>
  <form action="../Formulario Busqued - delete/pagina1.php" method="post">
    <input type="submit" value="Index">
  </form>
  <a href="funciondeBorrado.php">Borrar cookies</a>
</body>

</html>