<?php

    require("server.php");
    $sql = "SELECT * FROM usuarios";
    $query = $conection->query($sql);
    
?>
    <?php while ($result = $query -> fetch_array()):?>
        <div class="modal fade" id="<?php echo ($result['UsersID'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./components/Users/updateUser.php" method="POST">
                <p style="display: inline;">Nombre:</p>
                <input class="form-control" name="Nombre" style="width: 300px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Nombre"]) ?>'/><br>
                <p style="display: inline;">Apellido</p>
                <input class="form-control" name="Apellido" style="width: 300px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Apellido"]) ?>'/><br>
                <p style="display: inline;">Cedula</p>
                <input class="form-control" name="Cedula" style="width: 300px; display: inline; margin: 10px;" type="text" value='<?php echo($result["Cedula"]) ?>'/><br>
                <p style="display: inline;">Email</p>
                <input class="form-control" name="Email" style="width: 250px; display: inline; margin: 10px;" type="email" value='<?php echo($result["Email"]) ?>'/><br>
                <p style="display: inline;">Tipo_usuario</p>
                <select class="form-control" style="width: 200px; display: inline; margin: 10px;" name="Tipo_usuario">
                    <option><?php echo($result['Tipo_usuario']) ?></option>
                    <option><?php if($result['Tipo_usuario'] !== 'Recepcionista'){
                        echo('Recepcionista');
                    }else{
                        echo ('Admin');
                    }?>
                </select>
                <input type="hidden" name="id" value="<?php echo($result['UsersID']);?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success" name="btnSave<?php echo($result['UsersID']);?>">Guardar cambios</button>
                </form>
            </div>
            </div>
        </div>
        </div>
<?php endwhile;?>