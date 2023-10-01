<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertar, Editar, Eliminar Registros con Función PHP</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: center;
    padding: 2px;
}
tr:nth-child(even){background-color: #A7FF02}
th {
    background-color: #F15858;
    color: black;
}
.main-wrapper{
	width:60%;
	
	background:#EF812A;
	border:2px dashed #010101;
	padding:25px;
	margin:auto;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
h1{
	font-size:24px;
	}
	caption {
        padding: 20px;
		border: black solid;
		text-align: center;
		font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
		font-size: xx-large;
        color: black;
      }
</style>
</head>

<body>
</center>
<br><br>
<?php
	include("function.php");
	if(isset($_POST['submit'])){
		$field = ["nombres"=>$_POST['nombres'], "apellidos"=>$_POST['apellidos'], "apellidom"=>$_POST['apellidom'], "direccion"=>$_POST['direccion'], "ciudad"=>$_POST['ciudad'], "telefono"=>$_POST['telefono'], "correoe"=>$_POST['correoe'], "total"=>$_POST['total']];
		$tbl = "tabla_demo";
		insert($tbl,$field);
		
	}
?>
<table border="4" width="200%">
<caption>
        Datos de clientes deudores 
      </caption>
	<tr>
		<th width="10%">N° DE CLIENTE</th>
		<th width="10%">Telefono</th>
		<th width="10%">Correo Electronico</th>
		<th width="10%">Total</th>
		<th width="10%">Opcion</th>
	</tr>
<?php 
	$sql = "select * from tabla_demo";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->id;?></td> 
		<td><?php echo $row->telefono;?></td>
		<td><?php echo $row->correoe;?></td>
		<td><?php echo $row->total;?></td>
		<td>

		<a class="btn-edit" href="editar.php?id=<?php echo $row->id; ?>"><i class="fas fa-pencil-alt"></i> ✎ Editar</a>
&nbsp;&nbsp;&nbsp;
<a class="btn-delete" href="borrar.php?id=<?php echo $row->id;?>"><i class="fas fa-times"></i> ❌ Eliminar</a>
</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>