<?php
require_once 'config.php';

$sql = "SELECT * FROM usertype";
$result = $connection->query($sql);

if ($result === false) {
    die("Error al ejecutar la consulta: " . $connection->error);
}

$connection->close();

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
	
	<div class="container">
		<h2>Registro de usuario</h2>
		<form action="">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<label for="">Nombre(s)</label>
						<input type="text" name="FirstName" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<label for="">Apellido(s)</label>
						<input type="text" name="LastName" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<label for="">Tipo de usuario</label>
						<select name="TypeUserID" id="userType" class="form-control">
							<option value="">--Seleccione--</option>
							<?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row["TypeUserID"] . "'>" . $row["TypeName"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No hay tipos de usuario disponibles</option>";
                            }
                            ?>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<label for="">Ocupaciones</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row" id="otherOcupation">
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<label for="">Especifique</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<label for="">Ciudad</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-success">Registrarse</button>
			<br><br>
			<a href="login.php">Volver al inicio de sesion.</a>
		</form>
	</div>																												

</body>
</html>