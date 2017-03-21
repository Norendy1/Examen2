<?php

include "conexion.php";
$id=$_POST["ID"];

$sql="SELECT * FROM servicios Where Id_Servicios=$id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
$i=0;
while($fila=mysqli_fetch_assoc($result)){
	$datos[$i]=$fila;
	$i=$i+1;
	}
}else{
	echo "No existe ninguna concidencia con el ID de servicio escrito".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);
?>