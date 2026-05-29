<?php
$host = PHP_OS_FAMILY === "Windows" ? "localhost" : "host.docker.internal";
$conexion = mysqli_connect($host, "root", "", "bd_estudiantes", 3306);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
