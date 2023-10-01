<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de Clientes</title>
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

header{
    display: block;
    background-color: #E7EBDA;
    width:100%;
}

header h1{
    text-transform: uppercase;
    text-align: left;
    width:30%;
    display:inline-block;
}
header nav{
    text-align: right;
    display:inline-block;
    width:60%;
}

header ul{
    display: inline-block;
    list-style-type: none;
    margin: 0.5em auto;
    text-align: center;
}

header ul li{
    display: inline-block;
}

header ul li a{
    text-decoration: dashed;
    border: double;
    border-color: greenyellow;
    border-radius: 50px;
    background-color: blueviolet;
    color: pink;
    padding: 2em;
}

header ul li a:hover{
    background-color: #B8B799;
    border-color: #B8B799;
}

header ul li a:active{
    padding: 1em;
}
.barra-titulo {
  background-color: #05034D; /* Cambia el color de fondo según tus preferencias */
  color: #ffffff; /* Cambia el color del texto según tus preferencias */
  padding: 20px; /* Ajusta el espaciado interno según tus necesidades */
}

.h1 {
  margin: 0;
  font-size: 20px; /* Ajusta el tamaño de la fuente según tus preferencias */
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




</style>
</head>

<body>

<div class="main-wrapper">
<center>
<h1>REGISTRO DE CLIENTES</h1>
<br><br>
<img src="AD_2.jpg" width="200" height="200">
<center>
<form action="" method="post">
<div class="col-xs-3">
    <input class="form-control" name="id" type="text" placeholder="N° de cliente:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="nombres" type="text" placeholder="Nombre(s):">
  </div>
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="apellidos" type="text" placeholder="Apellido paterno:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="apellidom" type="text" placeholder="Apellido materno:">
  </div> 
  <br><br> 
  <div class="col-xs-3">
    <input class="form-control" name="direccion" type="text" placeholder="Direccion:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="ciudad" type="text" placeholder="Ciudad:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="telefono" type="text" placeholder="Telefono:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="correoe" type="text" placeholder="Correo electronico:">
  </div> 
  <br><br>
  <div class="col-xs-3">
    <input class="form-control" name="total" type="text" placeholder="Total a pagar:">
  </div> 
  <br><br>
	<input type="submit" name="submit" class="btn btn-primary" value="Insertar">
</div>
</center>
</form>
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
</table>
</div>
</body>
</html>