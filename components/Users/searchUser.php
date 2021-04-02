<div style="margin-bottom: 10px">
    <form action='' method='post'>
        <input type='text' name='input' placeholder='Buscar usuario...' class='form-control' style='width: 240px; display:inline;'/>
        <button type='submit' class='btn btn-info'><i class="fa fa-search" aria-hidden="true" style='display:inline;'></i></button>
    </form>
</div>

<!-- <?php

	include "server.php";
    $input = $_POST['input']; 

	$sql= "SELECT * FROM usuarios WHERE Nombre LIKE '%$input%' OR Apellido like '%$input%' OR Cedula LIKE '%$input%' OR Email like '%$input%' OR Tipo_usuario like '%$input%'";
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
<?php while ($result = $query -> fetch_array()):?>
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
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
    <p class="alert alert-warning">No se encontraron resultados</p>
<?php endif;?> -->