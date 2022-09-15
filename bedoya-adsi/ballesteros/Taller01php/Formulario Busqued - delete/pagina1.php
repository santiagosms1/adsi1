<?php
 

session_start();
   if($_POST ){

      $_SESSION['registrado'] = 'true';
      
          
      $conexion=mysqli_connect("localhost","root","","base1") or
      die("Problemas con la conexión"); 
        $registros = mysqli_query($conexion, "select id, nombre, contraseña, mail from alumnos where mail='$_REQUEST[email]'") or
          die("Problemas en el select:" . mysqli_error($conexion));
        $reg = mysqli_fetch_array($registros);

        $mailPedido = $_REQUEST['email'];
        
       

        if($_REQUEST['password'] == $reg['contraseña'] && $reg['mail'] == $mailPedido){
          ?><div> <?php
          echo "B I E N V E N I D O   ". $reg['nombre'];
          echo "<br>";
          echo "ID:" . $reg['id'] . "<br>";
          echo "<hr>";
          $_SESSION['name'] = $reg['nombre'];
          $_SESSION['id'] = $reg['id'];
          ?>
          </div>
         
        <html>
         
          <head>
            <title>Problema</title>
          </head>


          <body >
            <h1>Home</h1>
            <br>
            <br>
            <body <?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?>>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form class="color" action="../cookies/pagina2.php" method="post">
                  Seleccione de que color desea que sea la página de ahora en más:<br>
                  <?php
                  $radio="";
                  if ($_POST) {
                    $radio = (isset($_POST['radio']))?$_POST['radio']:"";
                  }
                  ?>
                  <input type="radio" value="rojo"   <?php echo ($radio == "rojo")      ?"checked":  ""; ?> name="radio">Rojo<br>
                  <input type="radio" value="verde"  <?php echo ($radio == "verde")     ?"checked":  ""; ?> name="radio">Verde<br>
                  <input type="radio" value="azul"   <?php echo ($radio == "azul")      ?"checked":  ""; ?> name="radio">Azul<br>
                  <input type="submit" value="Crear cookie">
                </form>

            <div class="menu">
              <div class="content">
                <form action="pagina2.php" method="post">
                
                  <input type="submit" value="Registrar usuario">
                </form>
                <form action="pagina3.php" method="post">
                  
                  <input type="submit" value="Registrar curso">
                </form>
                <form action="pagina6.php" method="post">
                  
                  <input type="submit" value="Consultar registro Usuarios">
                </form>
                <form action="pagina7.php" method="post">
                  
                  <input type="submit" value="Consultar Registros cursos">
                </form>
                <form action="../Actualizar/pagina1.html" method="post">
                  
                  <input type="submit" value="Actualizar">
                </form>
                <form action="pagina8.php" method="post">
                  
                  <input type="submit" value="Buscar">
                </form>
                <form action="pagina9.php" method="post">
                  
                  <input type="submit" value="Delete">
                </form>
                <form action="pagina10.php" method="post">
                  
                  <input type="submit" value="Delete All">
                </form>
                <form action="../Formulario Busqued - delete/count/alumnosPorCurso.php" method="post">
                  
                  <input type="submit" value="Alumnos Por Curso">
                </form>
                <form action="../Formulario Busqued - delete/count/TablasMultiplicar.php" method="post">
                  
                  <input type="submit" value="Tablas Multiplicar">
                </form>
                <form action="../Formulario Busqued - delete/count/LinksCursos.php" method="post">
                  
                  <input type="submit" value="Links Cursos">
                </form>
                <form action="../PaginacionRegistros/paginacionDeRegistros.php" method="post">
                  
                  <input type="submit" value="Paginacion Registros ">
                </form>
                <form action="../PaginacionRegistros//uploadfile.php" method="post">
                  
                  <input type="submit" value="Subir Imagen">
                </form>
                <form action="../cookies/pagina1.php" method="post">
                  
                  <input type="submit" value="Crear Cookies">
                </form>
                <form action="../cookies/borrarCokie.php" method="post">
                  
                  <input type="submit" value="Borrar Cookies">
                </form>
                <form action="../cookies/incluirArchivoExternos.php" method="post">
                  <input type="submit" value="Incluir Archivo">
                </form>
                
                <form action="../quejasReclamos/index.php" method="post">
                  <input type="submit" value="Quejas y Reclamos">
                </form>

                <form action="../fechas/index.php" method="post">
                  <input type="submit" value="Fechas">
                </form>

                <form action="../teclasKeyCode/index.php" method="post">
                  <input type="submit" value="KeyCode">
                </form>
              </div>
            </div>
          </body>
          <script>
            const title = document.querySelector('button.title')


            title.addEventListener('click', function() {
              location.reload()
            })
          </script>

        </html>
      <?php
        } else {
          header("Location: ../index.php?error=1");
          echo "";
        }
      mysqli_close($conexion);

   } else if (isset($_SESSION['registrado'])){
    ?>
    <div> <?php
          echo "B I E N V E N I D O   ". $_SESSION['name'];
          echo "<br>";
          echo "ID:" . $_SESSION['id'] . "<br>";
          echo "<hr>";
          ?>
          </div>
<html>
         
          <head>
            <title>Problema</title>
          </head>


          <body >
            <h1>Home</h1>
            
            <body <?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?>>
                <br>
                <form class="color" action="../cookies/pagina2.php" method="post">
                  Seleccione de que color desea que sea la página de ahora en más:<br>
                  <?php
                  $radio="";
                  if ($_POST) {
                    $radio = (isset($_POST['radio']))?$_POST['radio']:"";
                  }
                  ?>
                  <input type="radio" value="rojo"   <?php echo ($radio == "rojo")      ?"checked":  ""; ?> name="radio">Rojo<br>
                  <input type="radio" value="verde"  <?php echo ($radio == "verde")     ?"checked":  ""; ?> name="radio">Verde<br>
                  <input type="radio" value="azul"   <?php echo ($radio == "azul")      ?"checked":  ""; ?> name="radio">Azul<br>
                  <input type="submit" value="Crear cookie">
                </form>

            <div class="menu">
              <div class="content">
                <form action="pagina2.php" method="post">
                
                  <input type="submit" value="Registrar usuario">
                </form>
                <form action="pagina3.php" method="post">
                  
                  <input type="submit" value="Registrar curso">
                </form>
                <form action="pagina6.php" method="post">
                  
                  <input type="submit" value="Consultar registro Usuarios">
                </form>
                <form action="pagina7.php" method="post">
                  
                  <input type="submit" value="Consultar Registros cursos">
                </form>
                <form action="../Actualizar/pagina1.html" method="post">
                  
                  <input type="submit" value="Actualizar">
                </form>
                <form action="pagina8.php" method="post">
                  
                  <input type="submit" value="Buscar">
                </form>
                <form action="pagina9.php" method="post">
                  
                  <input type="submit" value="Delete">
                </form>
                <form action="pagina10.php" method="post">
                  
                  <input type="submit" value="Delete All">
                </form>
                <form action="../Formulario Busqued - delete/count/alumnosPorCurso.php" method="post">
                  
                  <input type="submit" value="Alumnos Por Curso">
                </form>
                <form action="../Formulario Busqued - delete/count/TablasMultiplicar.php" method="post">
                  
                  <input type="submit" value="Tablas Multiplicar">
                </form>
               
                <form action="../PaginacionRegistros/paginacionDeRegistros.php" method="post">
                  
                  <input type="submit" value="Paginacion Registros ">
                </form>
                <form action="../PaginacionRegistros/uploadfile.php" method="post">
                  
                  <input type="submit" value="Subir Imagen">
                </form>
                <form action="../cookies/borrarCokie.php" method="post">
                  
                  <input type="submit" value="Borrar Cookies">
                </form>
                
                
                <form action="../quejasReclamos/index.php" method="post">
                  <input type="submit" value="Quejas y Reclamos">
                </form>

                <form action="../fechas/index.php" method="post">
                  <input type="submit" value="Fechas">
                </form>

                <form action="../teclasKeyCode/index.php" method="post">
                  <input type="submit" value="KeyCode">
                </form>
              </div>
            </div>
          </body>
          <script>
            const title = document.querySelector('button.title')


            title.addEventListener('click', function() {
              location.reload()
            })
          </script>

        </html>
    <?php
   }
?>
