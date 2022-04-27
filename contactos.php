<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/logo1.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peletería Mustafa</title>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        <!-- CSS link  -->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
<!-- INICIO CABECERA  -->
<header class="cab">

<a href="#" class="logo"> <i class="fas fa-box"> </i> Peletería Mustafa </a>
<div id="menu-btn" class="fas fa-bars"></div>
<nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="nosotros.php">Conocenos</a>
        <a href="servicios.php">Productos</a>
        <a href="contactos.php"><button class="btnIS">Contáctanos</button></a>
</nav>
</header>
<!-- FINAL CABECERA -->

<!-- INICIO CONTACTOS -->
<br>
<br>
<br>
<section class="contact" id="contact">
    <h1 class="heading"> <span>Contáctanos</span> aquí</h1>

    <div class="row">
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.969803529276!2d-70.71264258648532!3d19.45686868687052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf560cf6ffc7%3A0xdba134ec1728e26a!2sPeleteria%20Mustafa!5e0!3m2!1ses!2sdo!4v1650756982644!5m2!1ses!2sdo" width="800" height="620" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
         <form action="registrar.php" method="Post" enctype="multipart/form-data">
             <div class="ico">
            <br>
            <h3>Ingresa tus datos</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="Nombre" placeholder="Ingresa tu nombre">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" name="CorreoElectrónico" class='form-control' placeholder="Ingresa tu correo electrónico">
            </div>
            <div class="inputBox">
                <span class="fas fa-compass"></span>
                <input type="text" name="Dirección" class='form-control' placeholder="Ingresa tu dirección">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" name="Teléfono" class='form-control' placeholder="Ingresa tu número teléfonico">
            </div>
            <div class="inputBox">
                <span class="fas fa-comment"></span>
                <input type="text" name="Mensaje" placeholder="Ingresa un mensaje">
            </div>
            
            <input type="submit" value="Contacta ya!" class="btn">
        </form>

    </div>
</section>
<!-- CONTACTOS TERMINADA -->

    <br>
<!-- PIE DE PAGINA  -->

<section class="footer">

<div class="box-container">

    <div class="box">
    <h3>Peletería Mustafa</h3>
    <p>Somos una tienda fisica dedicada a la preparación y venta de todo tipo de materiales para diferentes fabricaciones de productos.</p>
    </div>
    
    <div class="box"><h3 class="share">Links</h3>
         </br>
        <a href="index.php">Inicio</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="servicios.php">Productos</a>
        <a href="contactos.php">Contactos</a>
    </div>

    <div class="box"><h3 class="contact">Info</h3>
            <p> <i class="fas fa-map"></i> Santiago, Rep.Dom. </p>
            <p> <i class="fas fa-phone"></i> 809-582-0800 / 809-582-4026 </p>
            <p> <i class="fas fa-envelope"></i> peleteriamustafa.do@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 8:00am - 6:00pm </p>
    </div>

</div>

<h1 class="credit">Peletería Mustafa S.R.L &copy;<span>2022</span> Creado por Osmily Portorreal | Derechos reservados. </h1>

</section>
<!-- final pie de pagina -->

<!-- javascript  -->
    </body>
</html>

