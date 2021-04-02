<?php

if(!empty($_GET)){
	
	require("./server.php");
	
	$sql = "DELETE FROM encomiendas WHERE ClienteID=".$_GET["ClienteID"];
	$query = $conection->query($sql);

	if($query!=null){
		print "<script>alert(\"Eliminado exitosamente.\");window.location='../../recepcion.php';</script>";
	}else{
		print "<script>alert(\"No se pudo eliminar.\");window.location='../../recepcion.php';</script>";

	}
	
}

?>