<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomiendas</title>
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
    <?php require('./components/Nav/nav.php')?>
    <div style="margin: 85px 40px 40px">
    <form action='' method='post'>
    <input style="width: 270px; display:inline;" type="text" name="searchInput" class="form-control" placeholder="Busca tu encomienda...">
    <button style="margin: 10px 0;" type="submit" name="searchBtn" class="btn btn-success">Buscar</button>
    </form>
        <?php require('./components/Client/table.php') ?>
    </div>

    <footer class="bg-light text-center text-lg-start footer" style="margin-top: 187px;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2021 Copyright:
          <button class="btn btn-outline-secondary" onclick="window.location.href='personal.php'" style="margin-left: 10px; color: black;">Datos personales</button>
        </div>
      </footer>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="./components/Login/btnLogin.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>