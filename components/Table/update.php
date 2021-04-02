<?php

if(!empty($_POST)){
	if(isset($_POST["Ciudad_origen"]) &&isset($_POST["Ciudad_destino"]) &&isset($_POST["Localidad_origen"]) &&isset($_POST["Localidad_destino"]) &&isset($_POST["Direccion_entrega"]) &&isset($_POST["NombreyCI_Destinatario"]) &&isset($_POST["NombreyCI_Remitente"]) &&isset($_POST["Estado_encomienda"]) &&isset($_POST["Tipo_encomienda"]) &&isset($_POST["Observaciones"])){
        if($_POST["Ciudad_origen"]!="" && $_POST["Ciudad_destino"]!="" &&$_POST["Localidad_origen"]!="" &&$_POST["Localidad_destino"]!="" &&$_POST["Direccion_entrega"]!="" &&$_POST["NombreyCI_Destinatario"]!="" &&$_POST["NombreyCI_Remitente"]!="" &&$_POST["Estado_encomienda"]!="" &&$_POST["Tipo_encomienda"]!=""){
			include "server.php";
			
			$sql = "UPDATE encomiendas SET Ciudad_origen=\"$_POST[Ciudad_origen]\",Ciudad_destino=\"$_POST[Ciudad_destino]\",Localidad_origen=\"$_POST[Localidad_origen]\",Localidad_destino=\"$_POST[Localidad_destino]\",Direccion_entrega=\"$_POST[Direccion_entrega]\",NombreyCI_Destinatario=\"$_POST[NombreyCI_Destinatario]\",NombreyCI_Remitente=\"$_POST[NombreyCI_Remitente]\",Estado_encomienda=\"$_POST[Estado_encomienda]\",Tipo_encomienda=\"$_POST[Tipo_encomienda]\",Observaciones=\"$_POST[Observaciones]\" WHERE ClienteID=".$_POST["id"];
			$query = $conection->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../../recepcion.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");</script>";

			}
		}
	}
}



?>