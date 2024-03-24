<?php ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
 	<link rel="stylesheet" href="./assets/css/styles.css">
 	<title>GoodWorkersDO - Vacantes</title>
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
	        <li><a href="index.php">Inicio</a></li>
	        <li class="active"><a href="#">Vacantes</a></li>
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
	            <li><a href="#">Cerrar Sesion</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

 	<div class="container">
 		
 		<div class="row btnNewVacancyAndTitle">
 			<div class="col-xs-12 col-md-6">
 				<h2 class="text-left">Vacantes</h2>
 			</div>
 			<div class="col-xs-12 col-md-6">
 				<button class="btn btn-info pull-right btnNewVacancy">Nueva Vacante</button>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-xs-12 col-md-12">
 				<div class="panel panel-default">
 					<div class="panel-body">
 						<form action="">
 							<div class="row">
	 							<div class="col-xs-12 col-md-2">
	 								<div class="form-group">
	 									<label for="" class="control-label sr-only">Jornada</label>
	 									<select name="" id="" class="form-control">
	 										<option value="">Jornada</option>
	 										<option value="1">Tiempo Completo</option>
	 										<option value="2">Medio Tiempo</option>
	 										<option value="3">Pasantias</option>
	 									</select>
	 								</div>
	 							</div>
	 							<div class="col-xs-12 col-md-2">
	 								<div class="form-group">
	 									<label for="" class="control-label sr-only">Locacion</label>
	 									<select name="" id="" class="form-control">
	 										<option value="">Locacion</option>
	 										<option value="">Santo Domingo</option>
	 										<option value="1">Santiago</option>
	 										<option value="2">San Critobal</option>
	 									</select>
	 								</div>
	 							</div>
	 							<div class="col-xs-12 col-md-2">
	 								<div class="form-group">
	 									<label for="" class="control-label sr-only">Modalidad</label>
	 									<select name="" id="" class="form-control">
	 										<option value="">Modalidad</option>
	 										<option value="1">Presencial</option>
	 										<option value="2">Remoto</option>
	 										<option value="3">Hibrida</option>
	 									</select>
	 								</div>
	 							</div>
	 							<div class="col-xs-12 col-md-2">
	 								<div class="form-group">
	 									<label for="" class="control-label sr-only">Categoria</label>
	 									<select name="" id="" class="form-control">
	 										<option value="">Categorias</option>
	 										<option value="1">Diseño Grafico</option>
	 										<option value="2">Desarrollo de Software</option>
	 									</select>
	 								</div>
	 							</div>
	 							<div class="col-xs-12 col-md-2">
	 								<div class="form-group">
	 									<label for="" class="control-label sr-only">Tipo</label>
	 									<select name="" id="" class="form-control">
	 										<option value="">Tipo</option>
	 										<option value="1">Salario Fijo</option>
	 										<option value="2">Pago por Hora</option>
	 									</select>
	 								</div>
	 							</div>
	 							<div class="col-xs-12 col-md-2">
	 								<button type="submit" class="btn btn-block btn-success">Buscar</button>
	 							</div>
	 						</div>
 						</form>
 					</div>
 				</div>				
 			</div>
 		</div>

 		<hr>

 		<!-- Contenido -->
 		<div class="row">
 			<div class="col-xs-12 col-md-12">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<div class="row">
 							<div class="col-xs-12 col-md-6">
 								<a href="vacancyDetail.php">Titulo de la Vacante - $000000.00</a>
 							</div>
 							<div class="col-xs-12 col-md-6">
 								<a class="pull-right" href="perfilEmpleador.php">Nombre Empleador</a>
 							</div>
 						</div>
 					</div>
 					<div class="panel-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nemo provident, laboriosam ab nisi recusandae praesentium consequatur voluptas, quos facilis quidem necessitatibus ipsam ducimus modi excepturi ullam mollitia repudiandae id.</div>
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-xs-12 col-md-12">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<div class="row">
 							<div class="col-xs-12 col-md-6">
 								<a href="vacancyDetail.php">Titulo de la Vacante - $000000.00</a>
 							</div>
 							<div class="col-xs-12 col-md-6">
 								<a class="pull-right" href="perfilEmpleador.php">Nombre Empleador</a>
 							</div>
 						</div>
 					</div>
 					<div class="panel-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, ut, voluptate? Pariatur perspiciatis tempore porro eveniet a fuga repellendus quidem culpa deleniti. Natus facere, ducimus repellat? Dolorem, magni eligendi cum.</div>
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-xs-12 col-md-12">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<div class="row">
 							<div class="col-xs-12 col-md-6">
 								<a href="vacancyDetail.php">Titulo de la Vacante - $000000.00</a>
 							</div>
 							<div class="col-xs-12 col-md-6">
 								<a class="pull-right" href="perfilEmpleador.php">Nombre Empleador</a>
 							</div>
 						</div>
 					</div>
 					<div class="panel-body">Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Modi a nemo unde accusamus delectus, voluptates earum consequatur laudantium corrupti voluptatibus esse perferendis quidem, molestias inventore quam dolorum libero vitae vero?</div>
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-xs-12 col-md-12">
 				<div class="panel panel-default">
 					<div class="panel-heading">
						<div class="row">
 							<div class="col-xs-12 col-md-6">
 								<a href="vacancyDetail.php">Titulo de la Vacante - $000000.00</a>
 							</div>
 							<div class="col-xs-12 col-md-6">
 								<a class="pull-right" href="perfilEmpleador.php">Nombre Empleador</a>
 							</div>
 						</div>
 					</div>
 					<div class="panel-body">Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Architecto natus, cumque mollitia autem? Cum illum animi tenetur itaque at, eos odit aperiam repellendus voluptatum rerum fugiat et aut nesciunt deleniti.</div>
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-xs-12 col-md-12">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<div class="row">
 							<div class="col-xs-12 col-md-6">
 								<a href="vacancyDetail.php">Titulo de la Vacante - $000000.00</a>
 							</div>
 							<div class="col-xs-12 col-md-6">
 								<a class="pull-right" href="perfilEmpleador.php">Nombre Empleador</a>
 							</div>
 						</div>
 					</div>
 					<div class="panel-body">Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem quisquam alias dolorem praesentium doloribus sed magnam, expedita deserunt, dolores labore perferendis ratione accusamus voluptatibus adipisci, laboriosam. Quaerat numquam, sunt fuga.</div>
 				</div>
 			</div>
 		</div>

 	</div>
 	
 	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
 </body>
 </html>