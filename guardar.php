<?php
include ("conexion.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$sql="INSERT INTO datos VALUES(0,'$nombre','$email','$mensaje')";
$resultado=mysqli_query($conex,$sql);
if($resultado){
header("location:formulario.htm");

}else{
	echo "error";

}
?>