<?php

    require("server.php");
    $sql= "SELECT * FROM usuarios WHERE Nombre LIKE '%$input%' OR Apellido like '%$input%' OR Cedula LIKE '%$input%' OR Email like '%$input%' OR Tipo_usuario like '%$input%'";
    $query = $conection->query($sql);

?>

<?php if($query -> num_rows > 0):?>
<table class="table table-striped table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cedula</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo_usuario</th>
            <th></th>
        </tr>
    </thead>
<?php while ($result = $query -> fetch_array()):?>
<tr>
    <td><?php echo $result['Nombre']; ?></td>
    <td><?php echo $result['Apellido']; ?></td>
    <td><?php echo $result['Cedula']; ?></td>
    <td><?php echo $result['Email']; ?></td>
    <td><?php echo $result['Tipo_usuario']; ?></td>
	<td>
		<a href="#" id="edit-<?php echo $result["UsersID"];?>" class="btn btn btn-secondary" style="margin: 5px; color:black;"><i class="fa fa-pencil"></i></a>
        <script>
            $("#edit-"+<?php echo $result["UsersID"];?>).click(function(e){
                e.preventDefault();
                $("#<?php echo ($result['UsersID'])?>").modal('show');
            });
        </script>
		<a href="#" id="drop-<?php echo $result["UsersID"];?>" class="btn btn btn-danger" style="margin: 5px; color:black;"><i class="fa fa-trash"></i></a>
		<script>
            $("#drop-"+<?php echo $result["UsersID"];?>).click(function(e){
                e.preventDefault();
                p = confirm("Estas seguro?");
                if(p){
                    window.location="./components/Users/deleteUser.php?Cedula="+<?php echo $result["Cedula"];?>;

                }

            });
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
    <p class="alert alert-warning">No se encontraron resultados</p>
<?php endif;?>