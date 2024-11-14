<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "123456", "zule");

// Obtener el nombre y los datos binarios de la imagen desde $_FILES
$nombreImagen = $_FILES['imagen']['name'];
$imagenBinaria = file_get_contents($_FILES['imagen']['tmp_name']);

// Preparar la consulta
$query = "INSERT INTO imagenes (nombre, imagen) VALUES (?, ?)";
$stmt = $conexion->prepare($query);
$stmt->bind_param("sb", $nombreImagen, $imagenBinaria);
$stmt->execute();

?>