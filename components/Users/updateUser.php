<?php

if(!empty($_POST)){
	if(isset($_POST["Nombre"]) &&isset($_POST["Apellido"]) &&isset($_POST["Cedula"]) &&isset($_POST["Email"]) &&isset($_POST["Tipo_usuario"])){
        if($_POST["Nombre"]!="" && $_POST["Apellido"]!="" &&$_POST["Cedula"]!="" &&$_POST["Email"]!="" &&$_POST["Tipo_usuario"]!=""){
			include "server.php";
			
			$sql = "UPDATE usuarios SET Nombre=\"$_POST[Nombre]\",Apellido=\"$_POST[Apellido]\",Cedula=\"$_POST[Cedula]\",Email=\"$_POST[Email]\",Tipo_usuario=\"$_POST[Tipo_usuario]\" WHERE UsersID=".$_POST["id"];
			$query = $conection->query($sql);
			if($query!=null){
				print "<script>alert(\"Usuario actualizado!\");window.location='../../usuarios.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\"); window.location='../../usuarios.php';</script>";

			}
		}
	}
}



?>