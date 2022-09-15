<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    $fecha = false;

if (
    is_numeric($_REQUEST['dia']) &&
    is_numeric($_REQUEST['mes']) &&
    is_numeric($_REQUEST['anio'])
  ) 
    {
    if (checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['anio'])){
      echo "La fecha ingresada es correcta";
      $fecha = true;
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
  $fechanacimiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  if($fecha == true){
    mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso, contraseña, fechanac) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso], '$_REQUEST[password]','$fechanacimiento')")
    or die("Problemas en el select" . mysqli_error($conexion));
  echo "El alumno fue dado de alta.👌";
  ?>
 <form action="index.php" method="post">
    <br>
    <input type="submit" value="index">
  </form>
  <?php

  } else {
    echo "Datos Incorrectos";
    ?>
    <form action="registrarse.php" method="post">
       <br>
       <input type="submit" value="Try Again">
     </form>
     <?php

  }

  mysqli_close($conexion);

  ?>
 
</body>

</html>