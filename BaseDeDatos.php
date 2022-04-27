<?php
function conexion () {
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname ="PeleteríaMustafa";

$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

return $conectar;

}      
        
 ?>

