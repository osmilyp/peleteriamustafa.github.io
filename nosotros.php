<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/logo.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peletería Mustafa</title>
        <!-- Link para los iconos y el diseno -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- CSS link  -->
       <link rel="stylesheet" href="css/estilo.css"/> 
       <style>
@import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');

:root{
    --black:#13131a;
    --jk:#fff;
    --border:.1rem solid rgba(255,255,255,.3);
    --bg:#010103;
    --main-color:#d3ad7f; 
}
*{
    font-family: 'Lora', sans-serif; /*para la tipografia*/
    color: #fff; /*para el color de las letras dentro de cada archivo*/
    margin:0; padding:0; /*para cada espacio dejado*/
    box-sizing: border-box; /*para calcular el ancho de la caja a traves de los bordes (control de las cajas)*/
    outline: none; /*para que no dibuje ninguna linea fuera de los bordes de la pagina*/ 
    border:none; /*no expresar bordes*/
    text-decoration: none; /*para la decoracion del texto*/
    transition: .2s linear; /*para las transciones cada 2 segundos en linea*/
}

body{
    background: var(--bg); /*para el color del cuerpo*/
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 5rem;
}

/*FORMATO DE LOS BOTONES*/ 
.btn{
    display: inline-block; /*ue el contenido se bloquee por linea*/
    padding:8px; /*para los espacios de las letras dentro del boton*/
    font-size: 15px; /*para el tamano de las letras en los botones*/
    color:#000; /*para el color de las letras de los botones*/
    background: var(--main-color); /*para el color de fondo de los botones*/
    cursor: pointer; /*para cuando se coloque el cursor encima de dicho boton*/
    margin-top: 0px;
    box-shadow: 0 .5px .8px rgba(0,0,0,.3);
    border: 0px solid var(--bg);
    border-radius: 0px;
    opacity: 80%;
}

.btn:hover{
    letter-spacing: 2px; /*para el tamano de los espacios entre los caracteres del texto al colocar el cursor encima del boton*/
}
/*FORMATO DE BOTONES TERMINADA*/

.heading{
    text-align: center; /*para la alineacion del texto dentro de las secciones que utilicen el heading*/
    color: white; /*para el color de las letras*/
    text-transform: uppercase; /*para trasformar el texto entre mayuscula o minuscula*/
    padding: 20px; /*para los espacios entre las letras*/
    padding-top: 30px;
    font-size: 30px; /*para el tamano de las letras*/
}

.heading span{
    color:var(--main-color); /*para el color de las letras*/
    text-transform: uppercase; /*para trasformar el texto entre mayuscula o minuscula*/
}
.heading i{
    color:var(--black);
    font-size: 20px;
}
/**/

/*INICIO CABECERA*/ 
.cab{
    background: var(--bg); /*para el color de fondo de la cabecera*/
    opacity: 95%;
    display: flex; /*para que el contenido se comporte de manera flexible*/
    align-items: center; /*para que todo el contenido de la cabecera se alineen central*/
    justify-content: space-between; /*para que el contenido de la cabecera este justificado con espacios entre los textos*/
    padding:15px 3%; /*para el tamano del relleno que utiliza el menu en la pagina*/
    border-bottom: var(--border); /*para el color del borde de los miembros de la cabecera*/
    position: fixed; /*colocar la cabecera en posicion */
    top:0; left: 0; right: 0; /*para el desplazamiento de las cajas de arriba, a la izquierda y derecha*/
    z-index: 1000; /*nivel de la capa de la cabecera*/
}

.cab .navbar a{
    margin:0 8px; /*para el espacio entre cada enlace del menu*/
    font-size: 15px; /*para el tamano de las letras del menu*/
    color:#fff; /*para el color de las letras del menu*/
    align-items: center;
    display: inline-block;
}

.cab .navbar a:hover{
    color:var(--main-color); /*para el color de las letras al colocar el cursor*/
    border-bottom: .5px solid var(--main-color); /*para el tamano y color de los bordes*/
    padding-bottom: .0px; /*para establecer el relleno dentro de la caja del enlace al colocar el cursor*/
}

.logo {
  font-size: 25px;
  color: #fff;
  font-family: 'Poppins', sans-serif;
}

.logo i {
  color: var(--black);
  padding-right: .10px;
}
#menu-btn {
  font-size: 20px;
  color: #fff;
  cursor: pointer;
  display: none;
}
/*CABECERA TERMINADA*/ 

/*INICIO NOSOTROS*/
.nosotros{
    min-height: 510px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url(img/nosotr.png) no-repeat;
    background-size: cover;
    background-position: center;
}

.nosotros .content{
    text-align: center;
    padding:100px;
    margin: 50px;
}

.nosotros .content h1{
    font-size: 70px;
    color:var(--jk);
}

.nosotros .content p{
    font-size: 20px;
    color:var(--jk);
    margin: 10px;
    width: 100%;
}

.sobre .row{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}

.sobre .row .image{
    flex:1 1 100px;
    padding: 20px;
}

.sobre .row .image img{
    width: 100%;
}

.sobre .row .content{
    flex:1 1 70px;
    padding:20px;
}

.sobre .row .content h3{
    font-size: 25px;
    color:var(--main-color);
}

.sobre .row .content p{
    font-size: 15px;
    color:#fff;
    padding:10px 0;
    text-align: justify;
}

.filo{
    background: var(--bg);
    min-height: 471px;
}

.filo .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    width: 80%;
    margin:0 auto;
}

.filo .box-container .box{
    flex:1 1 220px;
    padding:20px 15px;
    text-align: center;
    background:#fff;
    border:.3px solid var(--bg);
    margin:15px;
    cursor: pointer;
}

.filo .box-container .box i{
    color: var(--bg);
    font-size: 40px;
    padding:12px 0;
}

.filo .box-container .box h3{
    color: #333;
    font-size: 20px;
}

.filo .box-container .box p{
    color: #666;
    font-size: 15px;
    padding:10px 0;
}

.filo .box-container .box a{
    color:#333;
    font-size: 25px;
}

.filo .box-container .box a:hover{
    color:var(--bg);
    
}

.filo .box-container .box:hover{
    box-shadow: 0 .5px .8px rgba(0,0,0,.3);
    background: #f3ece4;
}

.team{
    background: var(--jk);
    min-height: 350px;
}
.team h1{
    text-align: center; /*para la alineacion del texto dentro de las secciones que utilicen el heading*/
    color: black; /*para el color de las letras*/
    text-transform: uppercase; /*para trasformar el texto entre mayuscula o minuscula*/
    padding: 0px; /*para los espacios entre las letras*/
    padding-top: 10px;
    font-size: 30px; /*para el tamano de las letras*/
}


.team .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:20px 0;
}

.team .box-container .box{
    width: 300px;
    box-shadow: 0 .4px .8px rgb(255, 255, 255);
    margin:20px 10px;
    background:var(--black);
}

.team .box-container .box img{
    height: 200px;
    width: 100%;
    object-fit: cover;
}
.team .box-container .box img:hover{
  transform: scale(1.1);
}

.team .box-container .box .content{
    padding:15px;
}

.team .box-container .box .content span{
    font-size: 15px;
    color:rgb(255, 255, 255);
}

.team .box-container .box .content span i{
    padding:10px 0;
    color:var(--main-color);
} 

.team .box-container .box .content h3{
    font-size: 20px;
    color:rgb(255, 255, 255);
}

.team .box-container .box .content:hover h3{
    text-decoration: underline;
    color:var(--main-color);
}

.team .box-container .box .content p{
    color:rgb(255, 255, 255);
    font-size: 15px;
}
/*FINAL NOSOTROS*/

/*INICIO PIE DE PAGINA*/
.footer{
    background:#13131a;
}

.footer .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    width: 95%;
    margin:0 auto;
}

.footer .box-container .box{
    margin: 40px;
    flex:1 1 30px;
}
.footer .box-container .box h3{
    font-size: 28px;
    color: #fff;
    opacity: 85%;
}
.footer .box-container .box a{
    font-size: 25px;
}

.footer .box-container .box p{
    text-align: justify;
    font-size: 12px;
    color:#ccc;
    padding:5px 0;
}

.footer .box-container .box .share{
    text-align: center;
    font-size:25px;
    color:#fff;
}

.footer .box-container .box a{
    text-align: center;
    font-size: 15px;
    color:#fff;
    display: block;
    padding:.5px 0;
}

.footer .box-container .box a:hover{
    text-decoration: none;
    color: #fff;
    border-bottom: .1px solid var(--main-color); 
}

.footer .box-container .box .contact{
    text-align: justify;
    font-size: 25px;
    color: #fff;
}

.footer .credit{
    text-align: center;
    font-size: 17px; /**/ 
    color:#fff; /**/
    font-weight: lighter; /**/
    margin:2px auto;
    padding:2px 5px;
    border-top: .20px solid #ccc;
}

.footer .credit span{
    color:var(--main-color); /**/
}

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .cab{
        padding:1.5rem 2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: inline-block;
    }

    .cab .navbar{
        position: absolute;
        top:100%; right: -100%;
        background: #fff;
        opacity: 100%;
        width: 400px;
        height: calc(300px - 100px);
    }

    .cab .navbar.active{
        right:0;
    }

    .cab .navbar a{
        color: var(--black);
        display: block;
        margin:15px;
        padding:.8px;
        font-size: 15px;
    }

    .nosotros{
        background-position: left;
        justify-content: center;
        text-align: center;
    }

    .nosotros .content h1{
        font-size: 50px;
    }

    .nosotros .content p{
        font-size: 10px;
    }

}
@media (max-width:450px){

    html{
        font-size: 50%;
    }

}
       </style>
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

<!-- inicio  -->

<section class="nosotros" id="nosotros">
<div class="content">
    <h1>Quienes somos</h1>
    <p>"Cada elaboración es la medida de lo que somos, es lo que hacemos con lo que tenemos"</p>
    <center>
        <a href="contactos.php"><button class="btn">Visitanos!</button></a>
    </center>
</div>
</section>

<!-- inicio -->

<!-- sobre nosotros  -->

<section class="sobre" id="sobre">

<h1 class="heading"> <span>Nuestra</span>  historia </h1>

<div class="row">

    <div class="image">
        <img src="img/pl.jpeg" alt="">
    </div>

    <div class="content">
        <h3>Peletería Mustafa</h3>
        <p>Vihan Mustafa, desde Argentina emigró a la República Dominicana, y desde allí abrió 
            una pequeña empresa llamada Peletería Mustafa, la misma fue desarrollada en 1970 y 
            desde entonces ha seguido vigente y desarrollándose cada día más, desde el fallecimiento 
            de su fundador ha sido manejada por sus hijos Orlando, Abraham y Josélo Mustafa.</p>
    
    </div>

</div>

</section>

<!-- sobre -->
<!-- miembros  -->

<section class="team" id="team">

    <h1>Nuestros empresarios</h1>
<div class="box-container">

    <div class="box">
        <a href="https://www.facebook.com/jaime.mustafaovalles"><img src="img/vihan.jpg" alt=""></a>
        <div class="content">
            <span> <i class="fas fa-signature"></i> Fundador</span>
            <h3>Jaime Vihan Mustafa</h3>
        </div>
    </div> 
    
    <div class="box">
        <a href="https://www.facebook.com/jaime.mustafaovalles"><img src="img/carin.jpg" alt=""></a>
        <div class="content">
            <span> <i class="fas fa-briefcase"></i> Co-Fundador </span>
            <h3>Jose Luis Mustafa</h3>
        </div>
    </div>

    <div class="box">
        <a href="https://www.facebook.com/jaime.mustafaovalles"><img src="img/jaime.jpg" alt=""></a>
        <div class="content">
            <span> <i class="fas fa-sitemap"></i> Gerente </span>
            <h3>Jaime Mustafa</h3>
        </div>
    </div>
    
    <div class="box">
        <a href="https://www.instagram.com/orlandoamustafa/"><img src="img/orlandoa.jpg" alt=""></a> 
        <div class="content">
            <span> <i class="fas fa-calculator"></i> Administrador</span>
            <h3>Orlando Mustafa</h3>
        </div>
    </div>
    <div class="box">
        <a href="https://www.facebook.com/JAMR19/photos"><img src="img/abraham.jpg" alt=""></a> 
        <div class="content">
            <span> <i class="fas fa-industry"></i> Coordinador</span>
            <h3>Abraham Mustafa</h3>
        </div>
    </div>
    <div class="box">
        <a href="https://www.facebook.com/bmustafabreton"><img src="img/brasiliam.jpg" alt=""></a> 
        <div class="content">
            <span> <i class="fas fa-wallet"></i> Secretaria</span>
            <h3>Brasilia Mustafa</h3>
        </div>
    </div>

</div>

</section>

<!-- miembros -->
<!-- filosofia  -->

<section class="filo" id="filo">

<h1 class="heading">Filosofía <span>empresarial</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-thumbtack"></i>
        <h3>Misión</h3>
        <p>Elaborar productos textiles e innovadores de alta calidad que satisfagan las 
            necesidades de nuestros clientes, brindando siempre un servicio de excelencia, 
            capacitando y desarrollando las competencias de nuestro equipo de trabajo orientando 
            a la mejora continúa.</p>
    </div>

    <div class="box">
        <i class="fas fa-bullseye"></i>
        <h3>Visión</h3>
        <p>Ser una empresa líder y reconocida por su innovación, calidad y servicio a 
            nivel nacional, promoviéndose siempre como una oportunidad para asociarse 
            con cualquier industria y describiéndose como un lugar extraordinario para 
            trabajar.<br></p>
    </div>

    <div class="box">
        <i class="fas fa-hand-holding-water"></i>
        <h3>Valores</h3>
        <p>- Liderazgo</p>
        <p>- Comprensión</p>
        <p>- Honestidad</p>
        <p>- Tolerancia</p>
        <p>- Innovación</p>
    </div>

</div>

</section>

<!-- filosofia -->



<!-- politica -->
<section class="sobre" id="sobre">
    <h1 class="heading"> <span>Política </span> empresarial</h1>
    <div class="row">
        <div class="image">
            <img src="IMG/barteria.jpeg" alt="">
        </div>
        <div class="content">
            <p>La calidad se manifiesta en cada una de nuestras acciones y nos acompaña en todo lo que hacemos. Cada persona dentro de la empresa toma esta misión con seriedad y trabaja incansablemente para asegurar que nuestro sistema mantenga su promesa de ofrecer productos y servicios de calidad.</p>
        </div>
    </div>
</section>
<!-- politica -->

<!-- pie de pagina  -->
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