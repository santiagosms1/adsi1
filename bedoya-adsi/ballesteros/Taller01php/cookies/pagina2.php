<?php
if ($_REQUEST['radio'] == "rojo")
// header('location:#');
  setcookie("color", "#ff000099", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "verde")
  setcookie("color", "#00ff0099", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "azul")
  setcookie("color", "#0000ff99", time() + 60 * 60 * 24 * 365, "/");
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  Se creó la cookie.
  <br>
  <a href="../Formulario Busqued - delete/pagina1.php">Ir a la otra página</a>
</body>

</html>