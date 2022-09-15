<html>

<head>
  <title>Problema</title>
</head>

<body>
  <h2 class="title">Tablas de Multiplicar</button>
  <br>
    <form action="#" method="post">
        <input type="number" name="Number" placeholder="Ingrese un número" required min="0" class="number">
        <input type="submit" name="operar" >
    </form>
   
    <?php
        if ($_POST) {
            echo "Listado de la tabla del $_REQUEST[Number] <br>";
            for ($f = 1; $f <= 10; $f++) {
            $valor = $f * $_REQUEST['Number'];
            echo $valor . "<br>";
            }
    ?>
            <form action="#" method="post">
                <br>
                <input type="submit" value="Try Again" class="try">
            </form>
    <?php
        }
    ?>
   

  <form action="../pagina1.php" method="post">
    <br>
    <input type="submit" value="index">
  </form>
</body>


</html>