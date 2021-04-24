<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu principal</title>
  <link rel="icon" type="image/png" href="images/logo.png" />
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
  <?php require('./components/Nav/nav.php') ?>
  <div class="header-block" style="text-align: center; margin-top: 9%;">
    <img src="images/logo.png" alt="stonks logo">
    <h4 style="margin-bottom: 10px; margin-top: 20px;">No importa donde se encuentre tu producto,</h4>
    <h4>te lo podemos conseguir</h4>
  </div>
  <div class="container" style="margin-top: 15%;">
    <div class="row" style="margin-bottom: 80px;">
      <div class="col">
        <h2>Quienes somos?</h2><br>
        <bold style="width: 100%;">Somos una empresa en crecimiento y desarrollo, con mas de 5 años de experiencia.</bold>
        <bold>Nos dedicamos al transporte de mercancia y productos en todo el mundo para traerlos hasta tu hogar.</bold><br>
        <bold>Te podemos conseguir los productos de los E-Commerce mas conocidos como TiendaMia o Amazon, brindandote la mayor seguridad</bold>
      </div>
      <div class="col">
        <img src="images/img1.png" style="width: 50%; margin-left: 50px;">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <img src="images/clients.png" style="width: 50%; margin-left: 50px;">
      </div>
      <div class="col">
        <h2 style="margin-top: 20px">Nuestros clientes</h2><br>
        <bold>stonks busca la satisfaccion y participacion de las necesidades y expecativas de nuestros clientes.</bold>
        <bold>Actualmente mas de 10000 clientes nos vuelven a elegir a la hora de traer su producto del exterior.</bold>
      </div>
    </div>
  </div>
  <?php require('./components/Footer/footer.php') ?>
  <script src="./components/Login/btnLogin.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>