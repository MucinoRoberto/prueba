<div class="margenNav">
    <h1 class="text-center"><strong>Lista de productos</strong></h1>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $host = 'localhost'; 
            $usuario = 'root'; 
            $contrasena = '123456'; 
            $base_de_datos = 'zule_makeup'; 

            $conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

            $sql = "SELECT * FROM productos";
            $query = $conn->query($sql);
            while ($row = $query->fetch_assoc()) {
            ?>
                <div class="col-md-4 col-sm-6 mb-4"> 
                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                        <a href="?view=detalles&id=<?php echo $row['idProducto']; ?>">
                            <img class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($row['imagen']); ?>" alt="Producto" style="max-height: 400px; object-fit: contain;">
                        </a>
                        <p class="mt-2"><strong><?php echo $row['NombreProducto']; ?></strong></p>
                    </div>
                    <div class="text-center">
                        <p><strong>$<?php echo $row['precio']; ?></strong></p>
                    </div>
                </div>
            <?php
            }
            $conn->close();
            ?>
        </div>
    </div>
</div>
