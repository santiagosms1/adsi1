<?php
require_once ("../function.php");

$conexion = retornarConexion();
  $registros =mysqli_query($conexion, "UPDATE cursos SET nombrecurso='$_REQUEST[name]' WHERE idC= $_REQUEST[idC]"
  ) or
    die("Problemas en el select:" . mysqli_error($conexion));
    
    echo "Se actualizaron los cambios correctamente"
?>