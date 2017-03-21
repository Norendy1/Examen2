<?php
$servidor="mysql.hostinger.co";
$usuario="u399448725_noren";
$pwd="servicio";
$BD="u399448725_bd";

/*$servidor="mysql.hostinger.mx";
$usuario="u508262852_movil";
$pwd="sistemas";
$BD="u508262852_movil";*/

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
