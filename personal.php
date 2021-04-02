<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <script src="js/jquery.min.js"></script>
    <!--===============================================================================================-->
</head>
<body class="backgroundimg">
<?php require('./components/Nav/nav.php'); ?>
    <div class="container centerDiv">
        <div class="row">
            <div class="col">
                <img src="./images/datos.jpg" class="dataimg">
            </div>
            <div class="col" style="margin-top:50px; text-align: left;">
                <bold >Nombre: Nahuel Moreno</bold><br>
                <bold>C.I.: 53735959</bold>
            </div>
        </div>
        </div>
      <script src="./components/Login/btnLogin.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>