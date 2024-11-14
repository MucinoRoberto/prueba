<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zule Makeup & Beauty</title>
    <?php Core::includeCSS();?>
    <link rel="icon" href="/zulemakeup/Recursos/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<nav class=" navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    
  </div>
</nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="z-index:3; position: sticky;">
        <ul class="menu">
            <li class="navBar"> <a class="menu" href="?view=index">Inicio</a> </li>
            <li class="navBar">
                <a class="menu" aria-haspopup="true" href="https://wa.me/+5212721443738?text=Me%20gustaria%20poder%20agendar%20una%20cita" target="_blank">Solicitar citas</a>
            </li>

            
            <li class="navBar"> 
                <a class="menu" href="?view=ListaServicios" aria-haspopup="true">Servicios </a>
            </li>
            <li class="navBar"> 
                <a class="menu" aria-haspopup="true" href="?view=ListaPromociones">Promociones</a>  
            </li>
            <li class="navBar"> 
                <a class="menu" aria-haspopup="true" href="?view=ListaProductos">Productos</a>
            </li>
            <li class="navBar"> <a class="menu" href="?view=SobreMi">Sobre mi</a> </li>
            <li class="navBar"> <a class="menu" href="?view=contacto">Contacto</a> </li>
        </ul>
    </nav>




<div class="">

<?php View::load("index");?>
</div>





</body>
</html>