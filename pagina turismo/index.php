<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&family=Dancing+Script&family=Josefin+Sans:ital,wght@0,400;1,500;1,600;1,700&family=Krub:wght@400;700&family=Open+Sans&family=PT+Sans:wght@400;700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,700;1,800&family=Roboto:ital,wght@0,400;0,500;0,700;1,700&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Rodrigo@travel</title>
</head>
<body>
    <header class="header" id= "inicio">
        <img src="img/hambuerguesa.svg" alt="" class="hamburguer">
        <nav class="menu-navegacion spread">
            <a href="#inicio">inicio</a>
            <a href="#servicio">servicio</a>
            <a href="#portafolio">Galeria</a>
            <a href="#contacto">contacto</a>
            
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Invertir en viajar es invertir en uno mismo</h1>
            <p class="copy">En Rodrigo@travel Hacemos tus Sueños Realidad </p>
        </div>

        
    </header>
    <main>
        <section class=" contenedor" id="servicio">
            <h2 class="subtitulo">nuestro servicio</h2>
            <div class="contenedor-servicio">
                <img src="img/calendario.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number"> 1 </span>aseorias</h3>
                        <p>¡No importa si buscas unas vacaciones relajantes en la playa o una aventura emocionante 
                            en la montaña, estamos aquí para ayudarte a hacer realidad tus sueños de viaje!!</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number"> 2 </span>paquetes vacacionles</h3>
                        <p>Nuestros paquetes están diseñados para ofrecerte la mejor experiencia de viaje, cuidando cada detalle para que no tengas que preocuparte por nada más que disfrutar. Además, contamos con un equipo de profesionales que te 
                            ayudará en todo momento, desde la planificación hasta el regreso a casa.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number"> 3 </span>planes de pago</h3>
                        <p>Con nuestro servicio de planes de pago, puedes acceder a nuestros productos o servicios de alta calidad sin tener que pagar la totalidad del monto de una sola vez. Te ofrecemos la posibilidad de dividir el pago en cuotas mensuales o establecer un 
                            plan de pagos a medida que se ajuste a tu capacidad financiera.</p>
                    </div>
                    <div class="Button">
                        <a href="contacto.php" target="">
                            <div class="front"> Mas</div>
                            <div class="back">click</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="galery" id="portafolio">
            <h2 class="subtitulo">Galeria</h2>
            <div class="contenedor-galeria">
                <img src="img/imagen1.jpg" alt="" class="img-galeria">
                <img src="img/imagen2.jpg" alt="" class="img-galeria">
                <img src="img/imagen7.jpg" alt="" class="img-galeria">
                <img src="img/imagen4.jpg" alt="" class="img-galeria">
                <img src="img/imagen5.jpg" alt="" class="img-galeria">
                <img src="img/imagen9.jpg" alt="" class="img-galeria">
            </div>
        </section>
        <section class="imagen-light">
            <img src="img/close.svg " alt="">
            <img src="" alt="" class="agregar-imagen">
        </section>
        <section class="contenedor" id="expertos" >
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/road-trip-isometric.svg" alt="">
                    <h3 class="n-expert">viajes</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/easter-balloon-isometric.svg" alt="">
                    <h3 class="n-expert">paquetes turisticos</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/mountain-isometric-b7f34.svg" alt="">
                    <h3 class="n-expert">pasadias</h3>
                </div>
            </section>
        </section>
    </main>

    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contac-us">
               <h2 class="brand">Rodrigo@travel</h2> 
                <p >somos expertos en la creacion de tus sueños </p>
            </div>
            
            <div class="social-media">
                <a href="" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="" class="social-media-icon">
                    <i class='bx bxl-instagram-alt' ></i>
                </a>

            </div>
        </div>
        <div class="line">
            
        </div>
    </footer>
    
    
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
    
</body>
</html>