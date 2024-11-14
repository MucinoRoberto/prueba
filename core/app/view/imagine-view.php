<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>imagen</th>
        </tr>
    </thead>
    <tbody>
    <?php
$host = 'localhost'; // Cambiar con tu host
$usuario = 'root'; // Cambiar con tu usuario de MySQL
$contrasena = '123456'; // Cambiar con tu contraseña de MySQL
$base_de_datos = 'zule'; // Cambiar con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);




    // Consultar la base de datos para obtener la imagen
    $sql = "SELECT * FROM imagenes ";
    $query=$conn->query($sql);
    while($row = $query->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['nombre'] ?></td>
            <td><img src="data:image/png;base64,<?php echo base64_encode($row['imagen']);?>" alt=""></td>
        </tr>
        <?php
    }

$conn->close();
?>

    </tbody>
</table>

