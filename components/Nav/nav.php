<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="menu.php">
            <img src="images/logo.png" alt="Logo" style="width:60px;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          
            <?php
              if(empty($_SESSION['perfil'])){
                echo ('<ul class="navbar-nav mr-auto" id="navbarNav">');
                echo ('<li class="nav-item active">');
                echo ('<a class="nav-link" href="./search.php">Buscar pedido</a>');
                echo ('</li>');
                echo ('</ul>');
              }else{
              if($_SESSION['perfil'] == 'Recepcionista'){
                echo ('<ul class="navbar-nav mr-auto" id="navbarNav">');
                echo ('<li class="nav-item active">');
                echo ('<a class="nav-link" href="recepcion.php">Encomiendas</a>');
                echo ('</li>');
                echo ('</ul>');
              }
              if ($_SESSION['perfil'] == 'Admin'){
                echo ('<ul class="navbar-nav mr-auto" id="navbarNav">');
                echo ('<li class="nav-item active" style="margin: 10px">');
                echo ('<a class="nav-link" href="recepcion.php">Encomiendas</a>');
                echo ('</li>');
                echo ('<li class="nav-item active" style="margin: 10px">');
                echo ('<a class="nav-link" href="usuarios.php">Usuarios</a>');
                echo ('</li>');
                echo ('</ul>');
              }
              }
            ?>
            
            
          <li class="nav-item">
          <?php 
          if(empty($_SESSION['user'])){
            echo ("<button class='btn btn-secondary btn-lg' style='margin-right: 30px;' id='btnLogin'>");
            echo ("Login");
            echo ("</button>");
          }else{
            echo ('<ul class="navbar-nav">');
            echo ('<li class="nav-item">');
            echo ('<div class="dropdown">');
            echo ('<button class="dropbtn">');
            echo ($_SESSION['user']);
            echo ('</button>');
            echo ('<div class="dropdown-content">');
            echo ('<a id="close" href="./components/Login/logout.php">Cerrar session</a>');
            echo ('</div>');
            echo ('</div>');
            echo ('</li>');
            echo ('</ul>');
          }
          ?>
          </li>
        
      </nav>