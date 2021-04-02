<?php

if(!empty($_GET)){
	session_start();
	require("./server.php");
	
	if($_SESSION['id'] == $_GET["Cedula"]){
		echo ("<script>alert('No puedes eliminarte a ti mismo!'); window.location='../../usuarios.php';</script>");
		exit;
	}else{
		$sql = "DELETE FROM usuarios WHERE Cedula=".$_GET["Cedula"];
		$query = $conection->query($sql);

		if($query!=null){
			print "<script>alert(\"Usuario eliminado\");window.location='../../usuarios.php';</script>";
		}else{
			print "<script>alert(\"No se pudo eliminar.\");</script>";

		}
	}
}

?>
