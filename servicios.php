<!DOCTYPE html>

<html>
    <head>
        <link rel="icon" href="img/logo.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peletería Mustafa</title>
    <!-- LINK DE CARPETA DE ICONOS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    <!--LINK PARA PAQUETE DE ANIMACIONES , SLIDER-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- CSS LINK  
    <link rel="stylesheet" href="css/estilo.css">-->
    
    <style>
        /*LINK TIPOGRAFIA*/
@import url('https://fonts.googleapis.com/css2?family=Lora&display=swap'); 
/*FUENTE*/

/*INICIO COLORES DEL ROOT (GENERAL)*/
:root{
    --main-color:#d3ad7f; 
    --black:#13131a;
    --bg:#010103;
    --jk:#fff;
    --border:.10px solid rgba(255,255,255,.3);
}
/*PROYECTO*/ 
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
    background: var(--jk); /*para el color del cuerpo*/
}

section{
    padding: 30px;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}
/*PARA LA BARRA DEL NAVEGADOR*/
html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #d3ad7f;
    border-radius: 5rem;
}
/*PARA LA BARRA DEL NAVEGADOR*/

/*FINAL*/

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
.btnIS{
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

/*INICIO SERVICIOS*/
.servicios{
    min-height: 510px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url(./IMG/servicio.png) no-repeat;
    background-size: cover;
    background-position: center;
}

.servicios .content{
    text-align: center;
    padding:100px;
    margin: 50px;
}

.servicios .content h1{
    font-size: 70px;
    color:#fff;
}

.servicios .content p{
    font-size: 20px;
    color:#fff;
    margin: 10px;
    width: 100%;
}

.arrivals .arrivals-slider .box{
    display: flex;
    align-items:center;
    gap:10px;
    padding:20px 15px;
    margin:15px 0;
    border: #000;
}

.arrivals .arrivals-slider .box:hover{
    border:var(--bg);
}

.arrivals .arrivals-slider .box .image img{
    height:80%;
    width: 80%;
}

.arrivals .arrivals-slider .box .content h3{
    font-size: 20px;
    color:var(--black);
}

.arrivals .arrivals-slider .box .content .price{
    font-size: 20px;
    color:var(--black);
    padding-bottom: .20px;
}

/*FINAL SERVICIOS*/

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
    text-decoration: underline;
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
    font-size: 16px; /**/ 
    color:#fff; /**/
    font-weight: lighter; /**/
    margin:3px auto;
    padding:10px 5px;
    border-top: .10px solid #ccc;
}

.footer .credit span{
    color:var(--main-color); /**/
}
/*FINAL PIE DE PAGINA*/



/*INICIO RESPONSIVE*/
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
        opacity: 99%;
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
    
    .servicios{
        background-position: left;
        justify-content: center;
        text-align: center;
    }

    .servicios .content h1{
        font-size: 50px;
    }

    .servicios .content p{
        font-size: 10px;
    }

}
@media (max-width:450px){

    html{
        font-size: 50%;
    }

}
/*FINAL RESPONSIVE*/
    </style>
        
    </head>
    <body>
<!-- INICIO CABECERA  -->
<header class="cab">

    <a href="#" class="logo"> <i class="fas fa-box"> </i> Peletería Mustafa </a>
    <nav class="navbar">
            <a href="index.php">Inicio</a>
            <a href="nosotros.php">Conocenos</a>
            <a href="servicios.php">Productos</a>
            <a href="contactos.php"><button class="btnIS">Contáctanos</button></a>
    </nav>
    </header>
<!-- FINAL CABECERA -->

<!-- AJUSTES ENTRADA -->
<section class="servicios" id="servicios">
    <div class="content">
        <h1>Productos</h1>
        <p>Venta de todo tipo de materiales para la fabricación de calzados, carteras, gorras, tapicería y encuadernaciones.</p>
        <center>
             <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=CllgCJTMXgFZBpvLgpfnmgPSSqRNHQVwWhtnWLqXqprpHXTrgsNxzqqzzdSjmkGnvfTkgjSVBdB"><button class="btn">Haz tu pedido!</button></a>
        </center>
    </div>
    </section>
    <!--FINAL ENTRADA-->

<!-- SECCION DE LOS PRODUCTOS INICIADA  -->

<section class="arrivals" id="arrivals">

    <div class="swiper arrivals-slider">
<h1 class="heading"><span>Pegamentos</span></h1>
        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/colapetronio.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pegamento de Petronio</h3>
                    <div class="price">$1200.55</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/colagrip.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pegamento Grip</h3>
                    <div class="price">$763.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/colablanca.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pegamento Blanco</h3>
                    <div class="price">$820.66</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/colapvc.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pegamento PVC</h3>
                    <div class="price">$700.00</div>
                </div>
            </a>

        </div>

    </div>
    <h1 class="heading"><span>Piezas</span></h1>
    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/botongorra.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Botones de Gorra</h3>
                    <div class="price">$12.35</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/botonespico.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Botón de pico</h3>
                    <div class="price">$10.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/clavoroca.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Clavo Roca</h3>
                    <div class="price">$14.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/herbizapatos.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hebillas de Zapatos</h3>
                    <div class="price">$15.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/hebillascorrea.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hebillas de Correa</h3>
                    <div class="price">$13.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/expander.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Expander para Zapatos</h3>
                    <div class="price">$305.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/tachuelas.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tachuelas</h3>
                    <div class="price">$23.44</div>
                </div>
            </a>
            
             <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/ojales.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Ojales</h3>
                    <div class="price">$16.70</div>
                </div>
            </a>


            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/remache.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Remaches</h3>
                    <div class="price">$12.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/rejilla.png" alt="">
                </div>
                <div class="content">
                    <h3>Rejillas</h3>
                    <div class="price">$25.33</div>
                </div>
            </a>

        </div>

    </div>
    <h1 class="heading"><span>Telas</span></h1>
    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/telalona.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lonas</h3>
                    <div class="price">$600.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/telafibravidrio.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Fibra Vidrio</h3>
                    <div class="price">$150.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/pieldecerdo.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cerdo</h3>
                    <div class="price">$200.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/telagamuza.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gamuza</h3>
                    <div class="price">$250.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/telakiwi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kiwi</h3>
                    <div class="price">$150.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/telamicrofibra.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Microfibra</h3>
                    <div class="price">$233.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/charolnegro.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Charol negro</h3>
                    <div class="price">$120.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/telatecho.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tela para Techo</h3>
                    <div class="price">$140.55</div>
                </div>
            </a>

        </div>

    </div>
    
    <h1 class="heading"><span>Materiales</span></h1>
    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/tapaszapatos.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tapas de Tacones</h3>
                    <div class="price">$15.99</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/tapas.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tapas de Zapatos</h3>
                    <div class="price">$15.99</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/cartonc.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cartón Calibre 60-80-100</h3>
                    <div class="price">$30.00-200.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/cartonvortex.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cartón Vortéx</h3>
                    <div class="price">$150.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/plantillaeva.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cambre Eva</h3>
                    <div class="price">$113.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/cambreespuma.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cambre de Espuma</h3>
                    <div class="price">$110.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/forrofieltro.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Forro de Fieltro</h3>
                    <div class="price">$70.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/forrogrill.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Grill</h3>
                    <div class="price">$40.00</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/forrogabardina.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gabardina</h3>
                    <div class="price">$35.00</div>
                </div>
            </a>
            
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/hilonylon.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hilo Nylon</h3>
                    <div class="price">$130.55</div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/hilopoliester.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hilo Poliester</h3>
                    <div class="price">$200.33</div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- SECCION DE LOS PRODUCTOS FINALIZADA -->

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
    <!-- FINAL PIE DE PAGINA -->


<!-- PARA LAS ANIMACIONES EN LOS PRODUCTOS, EL SLIDER -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- CONEXION CON EL JAVASCRIPT DE LA ANIMACION DEL SLIDER -->
<script src="js/script.js"></script>

</body>
</html>
