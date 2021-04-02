<?php

    require("server.php");
    $sql = "SELECT * FROM encomiendas";
    $query = $conection->query($sql);
    
?>
    <?php while ($result = $query -> fetch_array()):?>
        <div class="modal fade" id="<?php echo ($result['ClienteID'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar encomienda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./components/Table/update.php" method="POST">
                <p style="display: inline;">Ciudad de origen:</p>
                <input class="form-control" name="Ciudad_origen" style="width: 300px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Ciudad_origen"]) ?>'/><br>
                <p style="display: inline;">Ciudad de destino:</p>
                <input class="form-control" name="Ciudad_destino" style="width: 300px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Ciudad_destino"]) ?>'/><br>
                <p style="display: inline;">Localidad de origen:</p>
                <input class="form-control" name="Localidad_origen" style="width: 300px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Localidad_origen"]) ?>'/><br>
                <p style="display: inline;">Localidad de destino:</p>
                <input class="form-control" name="Localidad_destino" style="width: 250px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Localidad_destino"]) ?>'/><br>
                <p style="display: inline;">Direccion de entrega:</p>
                <input class="form-control" name="Direccion_entrega" style="width: 250px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Direccion_entrega"]) ?>'/><br>
                <p style="display: inline;">Nombre y CI del destinatario:</p>
                <input class="form-control" name="NombreyCI_Destinatario" style="width: 240px; display: inline; margin: 10px;" type="text" value='<?php echo($result["NombreyCI_Destinatario"]) ?>'/><br>
                <p style="display: inline;">Nombre y CI del remitente:</p>
                <input class="form-control" name="NombreyCI_Remitente" style="width: 250px; display: inline; margin: 10px;" type="text" value='<?php echo($result["NombreyCI_Remitente"]) ?>'/><br>
                <p style="display: inline;">Estado de la encomienda:</p>
                <select class="form-control" style="width: 200px; display: inline; margin: 10px;" name="Estado_encomienda">
                    <option><?php echo($result['Estado_encomienda']) ?></option>
                    <option><?php if($result['Estado_encomienda'] !== 'Despachada'){
                        echo('Despachada');
                    }else{
                        echo ('Pendiente');
                    }?>
                </select><br>
                <p style="display: inline;">Tipo de encomienda:</p>
                <input class="form-control" name="Tipo_encomienda" style="width: 250px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Tipo_encomienda"]) ?>'/><br>
                <p style="display: inline;">Observaciones:</p>
                <input class="form-control" name="Observaciones" style="width: 300px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Observaciones"]) ?>'/>
                <input type="hidden" name="id" value="<?php echo($result['ClienteID']);?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success" name="btnSave<?php echo($result['ClienteID']);?>">Guardar cambios</button>
                </form>
            </div>
            </div>
        </div>
        </div>
<?php endwhile;?>