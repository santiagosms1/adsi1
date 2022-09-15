<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if (
    is_numeric($_REQUEST['dia']) &&
    is_numeric($_REQUEST['mes']) &&
    is_numeric($_REQUEST['anio'])
  ) {
    if (checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['anio'])){
      echo "La fecha ingresada es correcta";
    } else {
      echo "La fecha no es valida";
    }
      
   
  } else{
    if(!is_numeric($_REQUEST['dia']) ){
        echo "- El dia no es válido";
        echo"<br>";
    }  
    if(!is_numeric($_REQUEST['mes']) ){
        echo "- EL mes no es válido";
        echo"<br>";
    }
    if(!is_numeric($_REQUEST['anio']) ){
        echo "- El año no es válido";
        echo"<br>";
    }
    }
  ?>
  <form action="index.php" method="post">
    <input type="submit" value="index">
  </form>
</body>

</html>