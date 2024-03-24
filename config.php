<?php

$servername = 'localhost';
$dbname = 'goodworkersdb';
$username = 'root';
$password = '';

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
}

$result = $connection->query("SHOW DATABASES LIKE '$dbname'");

if ($result->num_rows == 0) {
    $sql = "CREATE DATABASE $dbname";
    
    if ($connection->query($sql) === TRUE) {
        echo "Base de datos creada con éxito.";
    } else {
        echo "Error al crear la base de datos: " . $connection->error;
    }
}

?>