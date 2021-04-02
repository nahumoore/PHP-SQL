<?php

    if(isset($_POST["loginBtn"])){

        $inputID = $_POST["inputID"];
        $pass = MD5($_POST["password"]);

        if($inputID != "" && $pass != ""){
            require("server.php");
            
            $sql = "SELECT * FROM usuarios WHERE cedula = '$inputID' AND clave = '$pass'";
            $filas = mysqli_num_rows($conection->query($sql));

            if($filas == 1){
                $perfil = "SELECT Nombre, Apellido, Tipo_usuario FROM usuarios WHERE cedula = '$inputID'";

                $result = $conection -> query($perfil);
                $infoUser = $result -> fetch_assoc();

                if($infoUser['Tipo_usuario'] == 'Admin'){
                    echo("<script>window.location = '../../recepcion.php'</script>");
                }else if($infoUser['Tipo_usuario'] == 'Recepcionista'){
                    echo("<script>window.location = '../../recepcion.php'</script>");
                }

                session_start();

                $_SESSION['user'] = $infoUser['Nombre']." ".$infoUser['Apellido'];
                $_SESSION['perfil'] = $infoUser['Tipo_usuario'];
                $_SESSION['id'] = $_POST["inputID"];
            }else{
                echo('<script>alert("Datos incorrectos"); window.location = "../../index.html";</script>');
            }
        }
    }

?>