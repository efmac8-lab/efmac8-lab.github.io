<?php
$base="efmac8";
$conex=mysqli_connect("localhost", "root", "", $base);
if($conex){
    //echo "conexion establecida";
}else{
    echo "error";
}
?>