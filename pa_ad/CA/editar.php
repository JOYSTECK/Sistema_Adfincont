<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include("function.php");
$id = $_GET['id'];
select_id('tabla_demo','id',$id);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->nombres;?>" name="nombres">
	<input type="text" value="<?php echo $row->apellidos;?>" name="apellidos">
	<input type="text" value="<?php echo $row->apellidom;?>" name="apellidom">
	<input type="text" value="<?php echo $row->direccion;?>" name="direccion">
	<input type="text" value="<?php echo $row->ciudad;?>" name="ciudad">
	<input type="text" value="<?php echo $row->telefono;?>" name="telefono">
	<input type="text" value="<?php echo $row->correoe;?>" name="correoe">
	<input type="text" value="<?php echo $row->total;?>" name="total">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = ["nombres"=>$_POST['nombres'], "apellidos"=>$_POST['apellidos'], "apellidom"=>$_POST['apellidom'], "direccion"=>$_POST['direccion'], "ciudad"=>$_POST['ciudad'], "telefono"=>$_POST['telefono'], "correoe"=>$_POST['correoe'], "total"=>$_POST['total']];
		$tbl = "tabla_demo";
		edit($tbl,$field,'id',$id);
		header("location:index.php");
	}
?>
</div>
</body>
</html>