<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px;">
  Agregar encomienda
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar encomienda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
                <p style="display: inline;">Ciudad de origen:</p>
                <input class="form-control" name="Ciudad_origen" style="width: 300px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Ciudad de destino:</p>
                <input class="form-control" name="Ciudad_destino" style="width: 300px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Localidad de origen:</p>
                <input class="form-control" name="Localidad_origen" style="width: 300px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Localidad de destino:</p>
                <input class="form-control" name="Localidad_destino" style="width: 250px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Direccion de entrega:</p>
                <input class="form-control" name="Direccion_entrega" style="width: 250px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Nombre y CI del destinatario:</p>
                <input class="form-control" name="NombreyCI_Destinatario" style="width: 240px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Nombre y CI del remitente:</p>
                <input class="form-control" name="NombreyCI_Remitente" style="width: 250px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Estado de la encomienda:</p>
                <input class="form-control" name="Estado_encomienda" style="width: 250px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Tipo de encomienda:</p>
                <input class="form-control" name="Tipo_encomienda" style="width: 250px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Observaciones:</p>
                <input class="form-control" name="Observaciones" style="width: 300px; display: inline; margin: 10px;" type="text"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="input" name="btnCreate" class="btn btn-success">Crear encomienda</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 

    if(isset($_POST['btnCreate'])){
        require('server.php');

        if($_POST['Ciudad_origen'] !== '' && $_POST['Ciudad_destino'] !== '' && $_POST['Localidad_origen'] !== '' && $_POST['Localidad_destino'] !== '' && $_POST['Direccion_entrega'] !== '' && $_POST['NombreyCI_Destinatario'] !== '' && $_POST['NombreyCI_Remitente'] !== '' && $_POST['Estado_encomienda'] !== '' && $_POST['Tipo_encomienda'] !== ''){
            
            $sql = "INSERT INTO Encomiendas
            (Ciudad_origen, Ciudad_destino, Localidad_origen, Localidad_destino, Direccion_entrega, NombreyCI_Destinatario,
            NombreyCI_Remitente, Estado_encomienda, Tipo_encomienda, Observaciones) VALUES (\"$_POST[Ciudad_origen]\",\"$_POST[Ciudad_destino]\",\"$_POST[Localidad_origen]\",\"$_POST[Localidad_destino]\",\"$_POST[Direccion_entrega]\",\"$_POST[NombreyCI_Destinatario]\",\"$_POST[NombreyCI_Remitente]\",\"$_POST[Estado_encomienda]\",\"$_POST[Tipo_encomienda]\",\"$_POST[Observaciones]\")";
            $query = $conection -> query($sql);
            if($query != NULL){
				echo "<script>alert('Encomienda agregada con exito!');window.location='./recepcion.php';</script>";
            }else{
				echo "<script>alert('La encomienda no pudo ser agregada :('); window.location = './recepcion.php'</script>";
            }
        }else{
            echo ('<script>alert("Campos incompletos"); window.location = "./recepcion.php"</script>');
        }
    }
?>