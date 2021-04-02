<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px;">
  Agregar Usuario
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="" method="POST">
                <p style="display: inline;">Nombre:</p>
                <input class="form-control" name="Nombre" style="width: 300px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Apellido</p>
                <input class="form-control" name="Apellido" style="width: 300px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Cedula</p>
                <input class="form-control" name="Cedula" style="width: 300px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Email</p>
                <input class="form-control" name="Email" style="width: 250px; display: inline; margin: 10px;" type="text"/><br>
                <p style="display: inline;">Contraseña</p>
                <input class="form-control" name="Clave" style="width: 250px; display: inline; margin: 10px;" type="password"/><br>
                <p style="display: inline;">Tipo_usuario</p>
                <select class="form-control" style="width: 200px; display: inline; margin: 10px;" name="Tipo_usuario">
                    <option>Admin</option>
                    <option>Recepcionista</option>
                </select>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="input" name="btnCreateUser" class="btn btn-success">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 

    if(isset($_POST['btnCreateUser'])){
        require('server.php');
        $pass = MD5($_POST["Clave"]);
        if($_POST['Nombre'] !== '' && $_POST['Apellido'] !== '' && $_POST['Cedula'] !== '' && $_POST['Email'] !== '' && $_POST['Clave'] !== ''){
            
            $sql = "INSERT INTO usuarios
            (Nombre, Apellido, Cedula, Email, Clave, Tipo_usuario) VALUES (\"$_POST[Nombre]\",\"$_POST[Apellido]\",\"$_POST[Cedula]\",\"$_POST[Email]\", \"$pass\" ,\"$_POST[Tipo_usuario]\")";
            $query = $conection -> query($sql);
            if($query != NULL){
				echo "<script>alert('Usuario creado con exito!');window.location='./usuarios.php';</script>";
            }else{
				echo "<script>alert('El usuario no pudo ser creado :('); window.location = './usuarios.php'</script>";
            }
        }else{
            echo ('<script>alert("Campos incorrectos"); window.location = "./usuarios.php"</script>');
        }
    }
?>