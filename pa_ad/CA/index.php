<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CLIENTES</title>
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
	body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #ffffff;
}

.arrow {
  display: inline-block;
  position: relative;
  padding: 10px 20px;
  background-color: yellow;
  color: white;
  font-weight: bold;
  text-decoration: none;
}

.arrow:before,
.arrow:after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
}

.arrow:before {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid yellow;
  top: -20px;
}

.arrow:after {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid yellow;
  bottom: -20px;
}


caption {
        padding: 20px;
		border: darkblue solid;
		text-align: center;
		font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
		font-size: xx-large;
        color: black;
      }
</style>
</head>

<body>

<?php
	include("function.php");
	if(isset($_POST['submit'])){
		$field = ["nombres"=>$_POST['nombres'], "apellidos"=>$_POST['apellidos'], "apellidom"=>$_POST['apellidom'], "direccion"=>$_POST['direccion'], "ciudad"=>$_POST['ciudad'], "telefono"=>$_POST['telefono'], "correoe"=>$_POST['correoe'], "total"=>$_POST['total']];
		$tbl = "tabla_demo";
		insert($tbl,$field);
		
	}
?>

<table border="4" width="100%">

		 
	
<caption>
	Datos de clientes
      </caption>
	  <caption>
	  <div class="search-container">
        <h1>Buscador:</h1>
		<br>
        <form method="POST" action="buscar.php">
		<input type="text" name="busqueda" placeholder="Escribe tu búsqueda">
            <button type="submit">Buscar</button>
			</form>
	  </caption>
	<tr>
		<th width="5%">N° DE CLIENTE</th>
		<th width="6%">NOMBRE(S)</th>
		<th width="8%">Apellido Paterno</th>
		<th width="8%">Apellidos Materno</th>
		<th width="15%">Direccion</th>
		<th width="10%">Ciudad</th>
		<th width="10%">Telefono</th>
		<th width="10%">Correo Electronico</th>
		<th width="10%">Total a pagar</th>
		<th width="30%">Opcion</th>
	</tr>

<?php 
	$sql = "select * from tabla_demo";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->id;?></td>
		<td><?php echo $row->nombres;?></td>
		<td><?php echo $row->apellidos;?></td>
		<td><?php echo $row->apellidom;?></td>
		<td><?php echo $row->direccion;?></td>
		<td><?php echo $row->ciudad;?></td>
		<td><?php echo $row->telefono;?></td>
		<td><?php echo $row->correoe;?></td>
		<td><?php echo $row->total;?></td>
		<td>

<a class="btn-edit" href="editar.php?id=<?php echo $row->id; ?>"><i class="fas fa-pencil-alt"></i> ✎ Editar</a>
&nbsp;&nbsp;&nbsp;
<a class="btn-delete" href="borrar.php?id=<?php echo $row->id;?>"><i class="fas fa-times"></i> ❌ Eliminar</a>
</td>
	</tr>
	
	<?php
 } 
 

 ?>
</table>
</body>
</html>