<?php

    if(isset($_POST['searchBtn'])){
        require("server.php");
        $sql = "SELECT Localidad_origen, Localidad_destino, NombreyCI_Destinatario, NombreyCI_Remitente, Estado_encomienda, Tipo_encomienda  FROM encomiendas WHERE ClienteID = \"$_POST[searchInput]\" ";        
        $query = $conection->query($sql);
?>

<?php
if($query -> num_rows > 0):?>
<table class="table table-striped table-dark table-hover">
    <tread>
        <tr>
            <th scope="col">Localidad de origen</th>
            <th scope="col">Localidad de destino</th>
            <th scope="col">Nombre de destinatario y C.I</th>
            <th scope="col">Nombre de remitente y C.I</th>
            <th scope="col">Estado de encomienda</th>
            <th scope="col">Tipo de encomienda</th>
        </tr>
    </tread>
    <?php while ($result = $query -> fetch_array()):?>
<tr>
    <td><?php echo $result['Localidad_origen']; ?></td>
    <td><?php echo $result['Localidad_destino']; ?></td>
    <td><?php echo $result['NombreyCI_Destinatario']; ?></td>
    <td><?php echo $result['NombreyCI_Remitente']; ?></td>
    <td><?php echo $result['Estado_encomienda']; ?></td>
    <td><?php echo $result['Tipo_encomienda']; ?></td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
    <p class="alert alert-warning" style="width: 300px;">No se encontraron resultados</p>
<?php endif;?>
<?php } ?>
