<html>
 
<head>
    <title>Problema</title>
</head>

<body>
    <?php
    require_once ("../function.php");

    $conexionH = retornarConexion();

    $registros = mysqli_query($conexionH, "select *
                            from alumnos where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el primero:" . mysqli_error($conexionH));
    $reg = mysqli_fetch_array($registros);
        
        $id =  $reg['id'];
        var_dump($id);
        $Nombre =   $reg['nombre'];
        var_dump($Nombre);
        $email = $reg['mail'];
        var_dump($email);
        $codigoCurso = $reg['codigocurso'];
        var_dump($codigoCurso);
        echo "<br>";

           
    ?>

    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

            mysqli_query($conexion, "insert into historial(id,nombre,mail,codigocurso) 
            values (id=$reg[id], nombre='$reg[nombre]', mail='$reg[mail]', codigocurso='$reg[codigocurso]')")
        or die("Problemas en el segundo " . mysqli_error($conexion));
        
    ?>

    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        mysqli_query($conexion, "UPDATE alumnos
                                 SET mail='$_REQUEST[mailnuevo]', nombre='$_REQUEST[nombre]', contraseña='$_REQUEST[contraseña]',codigocurso=$_REQUEST[codigocurso] 
                                 WHERE mail='$_REQUEST[mailviejo]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "El mail fue modificado con exito";


        mysqli_close($conexionH);
        mysqli_close($conexion);

        
        ?>
</body>

</html>
