<?php
require_once 'config.php';

session_start();

// Verificar si el usuario ya está autenticado, en ese caso, redirigir a la página protegida
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: index.php');
    exit;
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aquí deberías agregar la lógica de verificación de credenciales
    // Por ejemplo, consultando una base de datos para validar el usuario y la contraseña
    // Por simplicidad, aquí solo se usa un nombre de usuario y contraseña estáticos
    $username = 'usuario';
    $password = 'contraseña';

    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        // Iniciar sesión
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Nombre de usuario o contraseña incorrectos';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
 	<title>GoodWorkersDO - Portal de trabajos</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>

    <p>Si aun no tienes una cuenta. puedes <a href="register.php">registrarte aqui</a>.</p>
</body>
</html>