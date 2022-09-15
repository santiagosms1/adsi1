<html>
<style>
    img{
        background-size:contain;
    }
</style>
<head>
  <title>Photografia</title>
</head>

<body>
  <?php
  copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
  echo "La foto se registro en el servidor.<br>";
  $nom = $_FILES['foto']['name'];
  echo "<img src=\"$nom\">";
  ?>
 <form action="../Formulario Busqued - delete/pagina1.php" method="post">
<input type="submit" value="Menu Principal">
</form>
</body>

</html>