<?php 
require_once 'config.php';

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
 	<title>GoodWorkersDO - Portal de trabajos</title>
 </head>
 <body>
 	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">GoodWorkersDO</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="#">Inicio</a></li>
	        <li><a href="openJobs.php">Vacantes</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ofertas Rapidas<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Para Personas</a></li>
	            <li><a href="#">Para Empresas</a></li>
	          </ul>
	        </li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Notificaciones</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NombreUsuario <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Mi Perfil</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="logout.php">Cerrar Sesion</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

 	<div class="container">
 		<?php require_once 'classes/user.php'; ?>

 		<h2>Usuarios</h2>

		<?php 

		$usuarios = array(
		    new User('Edward', null, 'Lopez', '1992-11-10', '8098098009', 'edlopez23@yopmail.com'),
		    new User('Ana', 'María', 'García', '1985-07-15', '8091234567', 'ana.garcia@example.com'),
		    new User('Juan', null, 'Martínez', '1978-03-22', '8099876543', 'juan.martinez@example.com'),
		    new User('María', 'Isabel', 'Rodríguez', '1990-09-05', '8095554444', 'mariaisabel@example.com'),
		    new User('Carlos', null, 'Sánchez', '1982-12-30', '8091112233', 'csanchez@example.com'),
		    new User('Laura', 'Elena', 'Pérez', '1987-05-18', '8093336666', 'leperez@example.com'),
		    new User('Pedro', null, 'Gómez', '1995-02-28', '8098889999', 'pedrogomez@example.com'),
		    new User('Sofía', null, 'Fernández', '1980-10-12', '8097778888', 'sofia.fernandez@example.com'),
		    new User('Luis', 'Alberto', 'Hernández', '1976-08-03', '8092223333', 'lahernandez@example.com'),
		    new User('Ana', null, 'Díaz', '1989-04-20', '8094445555', 'anadiaz@example.com')
		);

		foreach ($usuarios as $usuario) {
		    $usuario->showUserInfo();

		    echo "<br/>";
		}


		?> 		

 	</div>
 	
 	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
 </body>
 </html>