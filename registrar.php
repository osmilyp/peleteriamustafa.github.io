<?php
include_once 'BaseDeDatos.php';

echo '<table border="0" align="center">';
      $Nombre=$_POST['Nombre'];
      $CorreoElectrónico=$_POST['CorreoElectrónico'];
      $Dirección=$_POST['Dirección'];
      $Teléfono=$_POST['Teléfono'];
      $Mensaje=$_POST['Mensaje'];
      
    $conectar= conexion();
    $sql="INSERT INTO `Cliente_comentarios`( Nombre, CorreoElectrónico, Dirección, Teléfono, Mensaje) 
          VALUES ('$Nombre','$CorreoElectrónico','$Dirección','$Teléfono','$Mensaje')";
    $result = mysqli_query($conectar, $sql)or trigger_error("Error en el query: " . mysqli_error($conectar), E_USER_ERROR);
        
    echo '<center><a href= "contactos.php"> Volver al Formulario</a></center>';

?>
