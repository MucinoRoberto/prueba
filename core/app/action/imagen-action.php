<?php

$conexion = new mysqli("localhost", "root", "123456", "zule_makeup");




    $precio = $_POST['Precio'];
    $nombreImagen = $_POST['Nombre'];
    $imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


    $query = "INSERT INTO productos (NombreProducto, imagen, precio) VALUES ( '$nombreImagen', '$imagenBinaria', '$precio')";
    $stmt = $conexion->query($query);


        if ($stmt) {
            echo "Imagen subida correctamente.";
        } else {
            echo "Error al subir la imagen.";
        }

    

$conexion->close();
?>
