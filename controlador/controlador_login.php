<?php

if(!empty($_POST["btningresar"])){
   if (!empty($_POST["usuario"]) and !empty($_POST["password"])){
   $usuario=$_POST["usuario"];
   $password=$_POST["password"];
   $sql=$conexion->query(" select * from usuario where usuario='$usuario' and clave='$password'");
   if($datos=$sql->fetch_object()){
      header("location: pa_ad/chat.html");
   } else{
      echo "<div class='alert alert-danger'>Acceso denegado</div>";
   }

   }else{
    echo "CAMPOS VACIOS";
   }
}

?>