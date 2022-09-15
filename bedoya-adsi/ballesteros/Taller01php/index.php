
<html>

<style>
</style>
<head>
  <title>Problema</title>
</head>


<body>
  <h1>Sing In </h1>
  
  <form action="./Formulario Busqued - delete/pagina1.php" method="post">
    
    Digite su correo:
    <br>
    <input type="email" placeholder="example@example.com" required name="email">
    <br>
    <br>
    Digite su contraseña:
    <br>
    <input type="password" placeholder=" . . . . ." required name="password">
    <br>
    <br>
    <input type="submit" value="Ingresar">
<br>
 
<?php {
    if (isset($_REQUEST['error']))
      echo "Datos Incorrectos, revise nuevamente el correo y la contraseña";
  }
  ?>
  <h3>¿No tienes cuenta aún? <a href="registrarse.php">haz click aqui</a> </h3>
</body>

</html>