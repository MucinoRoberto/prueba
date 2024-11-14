<?php
$host = 'localhost'; 
$usuario = 'root'; 
$contrasena = '123456'; 
$base_de_datos = 'zule_makeup'; 

$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

$id = $_GET['id'];
$sql = "SELECT p.idProducto as id, p.NombreProducto as producto, p.modelo, p.cantidad, p.agotado, p.precio, p.imagen, p.detalles, m.nombremarca as marca, t.nombretipo as tipo, 
a.nombreaplicacion as aplicacion FROM productos p, marcas m, tipos t, aplicacion a where p.fkmarca=m.idMarca and p.fkAplicacion = a.idAplicacion and p.fkTipo=t.idtipo AND p.idProducto='$id'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
?>

<div class="container my-5">
    <div class="row align-items-start justify-content-center text-center align-items-center">
        <div class="col-md-6">
            <img class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($row['imagen']); ?>" alt="Producto" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-md-6 text-start">
            <h1><strong><?php echo $row['producto']; ?></strong></h1><br>
            <p><?php echo $row['detalles']; ?></p>
            <p><strong>Marca: </strong><?php echo $row['marca']; ?></p>
            <p><strong>Lugar de aplicación: </strong><?php echo $row['aplicacion']; ?></p>
            <p><strong>Tipo de producto: </strong><?php echo $row['tipo']; ?></p>
            <p><strong>Modelo: </strong><?php echo $row['modelo']; ?></p>
            <a class="texto d-flex align-items-center justify-content-center" onclick="funcion('<?php echo $row['id']; ?>')">
        <div class="margenSup boton">
            ¡LO QUIERO!
        </div>
    </a>
        </div>
    </div>
</div>

<script>
function funcion(id) {
    const whatsappUrl = `https://wa.me/+5212721443738?text=Me%20interesa%20el%20producto%20${id}`;
    window.open(whatsappUrl, '_blank');
    window.location.href = '?view=index'; 
}
</script>
