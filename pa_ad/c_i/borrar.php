<?php 
include("function.php");
$id = $_GET['id'];
delete('productos','id',$id);
header("location:inventario.php");
?>