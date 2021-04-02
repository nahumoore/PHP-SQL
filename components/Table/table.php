<?php

    require("server.php");
    $sql= "SELECT * FROM encomiendas WHERE Ciudad_origen LIKE '%$input%' OR Ciudad_destino like '%$input%' OR Localidad_origen LIKE '%$input%' OR Localidad_destino like '%$input%' OR Direccion_entrega like '%$input%' OR NombreyCI_Destinatario like '%$input%' OR NombreyCI_Remitente like '%$input%' OR Estado_encomienda like '%$input%' OR Tipo_encomienda like '%$input%' OR Observaciones like '%$input%' ";
    $query = $conection->query($sql);

?>

<?php if($query -> num_rows > 0):?>
<table class="table table-striped table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">Ciudad de origen</th>
            <th scope="col">Ciudad de destino</th>
            <th scope="col">Localidad de origen</th>
            <th scope="col">Localidad de destino</th>
            <th scope="col">Dirrecion de entrega</th>
            <th scope="col">Nombre de destinatario y C.I</th>
            <th scope="col">Nombre de remitente y C.I</th>
            <th scope="col">Estado de encomienda</th>
            <th scope="col">Tipo de encomienda</th>
            <th scope="col">Observaciones</th>
            <th></th>
        </tr>
    </thead>
    
<?php
while ($result = $query -> fetch_array()):
    // Los usuarios Recepcionistas solo pueden ver las encomiendas pendientes
    if($_SESSION['perfil'] == "Recepcionista" && $result['Estado_encomienda'] == "Pendiente"){?> 
        <tr>
            <td><?php echo $result['Ciudad_origen']; ?></td>
            <td><?php echo $result['Ciudad_destino']; ?></td>
            <td><?php echo $result['Localidad_origen']; ?></td>
            <td><?php echo $result['Localidad_destino']; ?></td>
            <td><?php echo $result['Direccion_entrega']; ?></td>
            <td><?php echo $result['NombreyCI_Destinatario']; ?></td>
            <td><?php echo $result['NombreyCI_Remitente']; ?></td>
            <td><?php echo $result['Estado_encomienda']; ?></td>
            <td><?php echo $result['Tipo_encomienda']; ?></td>
            <td><?php echo $result['Observaciones']; ?></td>
            <td>
                <a href="#" id="edit-<?php echo $result["ClienteID"];?>" class="btn btn btn-secondary" style="margin: 5px; color:black;"><i class="fa fa-pencil"></i></a>
                <script>
                    $("#edit-"+<?php echo $result["ClienteID"];?>).click(function(e){
                        e.preventDefault();
                        $("#<?php echo ($result['ClienteID'])?>").modal('show');
                    });
                </script>
            </td>
        </tr>
    <?php }else if ($_SESSION['perfil'] == "Admin"){?>
        <tr>
        <td><?php echo $result['Ciudad_origen']; ?></td>
        <td><?php echo $result['Ciudad_destino']; ?></td>
        <td><?php echo $result['Localidad_origen']; ?></td>
        <td><?php echo $result['Localidad_destino']; ?></td>
        <td><?php echo $result['Direccion_entrega']; ?></td>
        <td><?php echo $result['NombreyCI_Destinatario']; ?></td>
        <td><?php echo $result['NombreyCI_Remitente']; ?></td>
        <td><?php echo $result['Estado_encomienda']; ?></td>
        <td><?php echo $result['Tipo_encomienda']; ?></td>
        <td><?php echo $result['Observaciones']; ?></td>
        <td>
            <a href="#" id="edit-<?php echo $result["ClienteID"];?>" class="btn btn btn-secondary" style="margin: 5px; color:black;"><i class="fa fa-pencil"></i></a>
            <script>
                $("#edit-"+<?php echo $result["ClienteID"];?>).click(function(e){
                    e.preventDefault();
                    $("#<?php echo ($result['ClienteID'])?>").modal('show');
                });
            </script>
            <?php if($_SESSION['perfil'] == "Recepcionista"){
                echo ('');
            }else{?>
            <a href="#" id="drop-<?php echo $result["ClienteID"];?>" class="btn btn btn-danger" style="margin: 5px; color:black;"><i class="fa fa-trash"></i></a>
            <script>
                $("#drop-"+<?php echo $result["ClienteID"];?>).click(function(e){
                    e.preventDefault();
                    p = confirm("Estas seguro?");
                    if(p){
                        window.location="./components/Table/delete.php?ClienteID="+<?php echo $result["ClienteID"];?>;

                    }

                });
            </script>
            <?php } ?>
        </td>
    </tr>
    <?php }?>
<?php endwhile;?>
</table>
<?php else:?>
    <p class="alert alert-warning">No se encontraron resultados</p>
<?php endif;?>
