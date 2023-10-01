<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inventario de productos</title>
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
</style>
</head>

<body>
<BR><BR>
<div class="main-wrapper">
<center>
<h1>REGISTRO DE PRODUCTOS</h1>
<br><br>
<img src="AD_2.jpg" width="200" height="200">
<center>
<form action="" method="post">
<div class="col-xs-3">
    <input class="form-control" name="id" type="text" placeholder="Código:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="n_Articulo" type="text" placeholder="Nombre del Articulo:">
  </div>
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="Entradas" type="text" placeholder="Entradas:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="Salidas" type="text" placeholder="Salidas:">
  </div> 
  <br><br>
	<div class="col-xs-3">
    <input class="form-control" name="Stock" type="text" placeholder="Stock:">
  </div> 
  <br><br>
  <input type="submit" name="submit" class="btn btn-primary" value="REGISTRAR PRODUCTO">
</div>
</center>
</form>
</center>
<br><br>
</center>
<br><br>
<?php
	include("function.php");
	if(isset($_POST['submit'])){
		$field = ["id"=>$_POST['id'],"n_Articulo"=>$_POST['n_Articulo'], "Entradas"=>$_POST['Entradas'], "Salidas"=>$_POST['Salidas'], "Stock"=>$_POST['Stock']];
		$tbl ="productos";
		insert($tbl,$field);
		
	}
?>
<table border="1" width="100%">
	<tr>
		<th width="5%">N° DE PRODUCTO</th>
		<th width="15%">NOMBRE DEL ARTICULO</th>
		<th width="8%">ENTRADAS</th>
		<th width="8%">SALIDAS</th>
		<th width="18%">STOCK</th>
		<th width="10%">Opcion</th>
	</tr>
<?php 
	$sql = "select * from productos";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->id;?></td>
		<td><?php echo $row->n_Articulo;?></td>
		<td><?php echo $row->Entradas;?></td>
		<td><?php echo $row->Salidas;?></td>
		<td><?php echo $row->Stock;?></td>
		<td>

		<a class="btn-edit" href="editar.php?id=<?php echo $row->id; ?>"><i class="fas fa-pencil-alt"></i> ✎ Editar</a>
&nbsp;&nbsp;&nbsp;
<a class="btn-delete" href="borrar.php?id=<?php echo $row->id;?>"><i class="fas fa-times"></i> ❌ Eliminar</a>
</td>
	</tr>
	<?php } ?>
</table>
<br><br><br>
</body>
</html>