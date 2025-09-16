<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home HotelixHub</title>
    <link rel="stylesheet" href="../assets/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- ================================== INICIO O HEADER =====================================-->
    <header>
        <!-- NAV -->
        <nav>
            <!--Imagen de Logo, redirecciona al Home Page-->
            <a href="Home.php"><img src="../assets/img/imgHome/Logo Positivo.png" alt="Logo" width="200px" height="60px"></a>
            
            <!-- Botón de menú para móviles -->
            <button class="menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <ul class="nav-menu">        
                <a href="#nosotros">Inicio</a>
                <a href="#reservas">Reservas</a>
                <a href="#servicios">Servicios</a>
                <a href="#contacto">Contacto</a>
                <a href="login.php">Login</a>
            </ul>
        </nav>

        <!--PRESENTACION-->
        <div id="hero">
            <h2>Invovacion digital  para <br> reservas y ventas inteligentes</h2>
            <h1>Optimiza tus operaciones y <br> mejora la experiencia del <br> cliente</h1>
        </div>
    </header>

    <!--MAIN-->
    <main>
        <!-- ====================================== SECCION FORMULARIO RAPIDO RESERVAR ====================================-->
        <section id="formulario">
            <form action="procesar_reserva.php" method="POST">
                <!-- RESERVAR-->
                <div class="reservar">
                    <!-- FECHA ENTRADA-->
                    <div class="inputGrupo">
                        <label><strong>Check in</strong></label>  
                        <br>      
                        <input type="date" name="checkin" id="checkin">
                    </div>
                    
                    <!-- FECHA SALIDA -->
                    <div class="inputGrupo">
                        <label><strong>Check out</strong></label>
                        <input type="date" name="checkout" id="checkout" placeholder="Check out">
                    </div>
                    
                    <!-- NUMERO DE PERSONAS -->
                    <div class="inputGrupo">
                        <label><strong>Huespedes</strong></label>
                        <input type="number" name="invitados" id="invitados" placeholder="Huespedes" min="1">
                    </div>
                    
                    <!-- BOTON BUSCAR -->
                    <button id="submit" class="buscar" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </form>
        </section>

        <!-- ===================================== SECCION NOSOTROS =========================================-->
        <section id="nosotros">
            <!-- INTRODUCCION DE HOTELIX-HUB-->
            <div class="contenido">
                <h2>Hotelix Hub</h2>
                <p>En HOTELIXHUB, simplificamos la gestión hotelera con soluciones 
                    para reservas en línea, atención al cliente y administración 
                    eficiente. <br> Diseñamos herramientas intuitivas para satisfacer 
                    las necesidades de huéspedes y personal, garantizando comodidad 
                    y optimización operativa.</p>
            </div>
            <div id="imagenes">
                <img src="../assets/img/imgHome/img1.png" alt="Imagen 1" id="img-peque"> <!-- IMG REPRESENTA EXTERIOR HOTEL-->
                <img src="../assets/img/imgHome/img2.png" alt="Imagen 2" id="img-media"> <!--"              " SERVICIO AL CLIENTE-->
                <img src="../assets/img/imgHome/img3.png" alt="Imagen 3" id="img-gran">  <!--"              " RECEPCION HOTEL-->
            </div>
        </section>

        <!-- ====================================== SECCION DE RESERVAS ====================================== -->
        <section id="reservas">
            <!-- INTRODUCCION DE RESERVAS-->
            <div class="contenerdor-r">
                <h2><strong>Reservas</strong></h2>

                <div class="contenido1-r">
                    <div class="imagen-r">
                        <img src="../assets/img/imgHome/reservas.png" alt="reservas">
                    </div>
                    <div class="texto-r">
                        <article class="texto1">
                            <h3>Reservas en Línea</h3>
                            <h4><strong>Reserva tu estancia ideal</strong></h4>
                            <p>
                                Facilita la búsqueda de habitaciones,
                                confirma disponibilidad en tiempo real
                                y gestiona reservas de manera rápida
                                y segura desde nuestra plataforma.
                            </p>

                            <!-- BOTON RESERVAR, redirigue al reservas-->
                            <a href="reservas.php" class="btn-reserva"><strong>¡Haz tu reserva ya!</strong></a>
                        </article>
                    </div>                 
                </div>

                
                <!-- GESTION DE RESERVAS -->
                <div class="contenido2-r">
                    <!-- GESTION 1-->
                    <article>
                        <h4><strong>Buscar Habitaciones</strong></h4>
                        <p>
                            Filtra por fechas, tipo de habitación y cantidad de huéspedes para encontrar justo lo que buscas.
                        </p>
                    </article>
                    
                    <!-- GESTION 2-->
                    <article>
                        <h4><strong>Confirmar Reserva</strong></h4>
                        <p>
                            Elige, confirma y realiza el pago directamente desde nuestra plataforma, sin intermediarios.
                        </p>
                    </article>

                    <!-- GESTION 3-->
                    <article>
                        <h4><strong>Gestión de Reservas</strong></h4>
                        <p>
                            Modifica, consulta o cancela tus reservas en cualquier momento con total facilidad.
                        </p>
                    </article>

                    <!-- GESTION 4-->
                    <article>
                        <h4><strong>Notificaciones Automáticas</strong></h4>
                        <p>
                            Recibe alertas, confirmaciones y recordatorios sobre tu reserva en tiempo real.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- ====================================== SECCION DE SERVICIOS ====================================== -->
        <section id="servicios">
            <!-- INTRODUCCION DE SERVICIOS -->
            <div class="contenerdor-s">
                <div class="contenido1-s">
                    <div class="imagen-s">
                        <img src="../assets/img/imgHome/Component 2.png" alt="servicios">
                    </div>
                    <div class="texto-s">
                        <article class="text">
                            <h2><strong>Servicios</strong></h2>
                            <p>
                                En HOTELIXHUB, simplificamos la gestión hotelera 
                                con soluciones para reservas en línea, atención al cliente 
                                y administración eficiente. Diseñamos herramientas intuitivas 
                                para satisfacer las necesidades de huéspedes y personal, 
                                garantizando comodidad y optimización operativa.
                            </p>
                        </article>
                    </div>                 
                </div>
            </div>

            <!-- SERVICIOS -->
            <div class="contenido2-s">
                <!-- SERVICIO 1-->
                <article>
                    <img src="../assets/img/imgHome/Component 3.png" alt="gestion de reservas">
                    <h4><strong>Gestion de reservas</strong></h4>
                    <p>
                        Accede a disponibilidad, personaliza tu búsqueda y confirma tu reserva en segundos.
                    </p>
                </article>

                <!-- SERVICIO 2-->
                <article>
                    <img src="../assets/img/imgHome/Component 4.png" alt="ventas desde la habitacion">
                    <h4><strong>Ventas desde la habitacion</strong></h4>
                    <p>
                        Explora un catálogo digital para adquirir productos y servicios sin salir de tu habitación.
                    </p>
                </article>

                <!-- SERVICIO 3-->
                <article>
                    <img src="../assets/img/imgHome/Component 5.png" alt="#">
                    <h4><strong>AdminSuite</strong></h4>
                    <p>
                        Administra fácilmente usuarios, habitaciones y ventas desde un panel moderno e intuitivo.
                    </p>    
                </article>

                <!-- SERVICIO 4-->
                <article>
                    <img src="../assets/img/imgHome/Component 6.png" alt="panel de control">
                    <h4><strong>Notificaciones Automáticas</strong></h4>
                    <p>
                        Mejora la atención al cliente con notificaciones instantáneas, chats en línea y seguimiento de solicitudes.
                    </p>
                </article>
            </div>
        </section>

        <!-- ====================================== SECCION DE CONTACTANOS ====================================== -->
        <section id="contacto">
            <form class="formulario-C">
                <!-- INTRODUCCION DE CONTACTANOS-->
                <h2><strong>Contactanos</strong></h2>
                <p>¿Tienes preguntas, necesitas ayuda o simplemente 
                    quieres saber más sobre Hotelix? <br> ¡Nos encantaría 
                    escucharte! Ponte en contacto con nuestro equipo 
                    a través de los siguientes canales:
                </p>
                
                <!-- CAMPOS DEL FORMULARIO CONTACTANOS -->
                <div class="filas">
                    <div class="campo">
                      <input type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="campo">
                      <input type="number" name="telefono" placeholder="Teléfono">
                    </div>
                  </div>                  
                  
                <div class="filas">
                    <div class="campo">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="campo">
                        <select name="ciudad" id="ciudad">
                            <option value="#">Ciudad</option>
                            <option value="Cali">Cali</option>
                            <option value="Bogota">Bogota</option>
                            <option value="Medellin">Medellin</option>
                        </select>
                    </div>
                </div>
                <div class="filas">
                    <div class="campo">
                        <select name="motivo" id="motivo" >
                            <option value="#" disabled selected>Motivo de Contacto</option>
                            <option value="reservas">Reservas</option>
                            <option value="soporte">Soporte</option>
                            <option value="general">Información General</option>
                            <option value="sugerencias">Sugerencias</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                    <div class="campo">
                        <input type="text" name="mensaje" placeholder="Mensaje">
                    </div>
                </div>

                <!-- BOTON PARA ENVIAR FORMULARIO-->
                <button id="submit"><strong>ENVIAR</strong></button>
            </form>
        </section>
    </main>
    
    <!-- ================================================== FOOTER ==================================================== -->
    <footer>
        <div class="foot">
            <p>
                HOTELIXHUB <br>
                Términos y Condiciones <br>
                Política de Privacidad <br>
                soportehotelixhub@gmail.com
            </p>
        </div>

        <div class="foot">
            <h6>Síguenos en Redes Sociales</h6>
            <p>
                Facebook <br>
                Instagram <br>
                Twitter
            </p>
        </div>
    </footer>

    <div id="modal-exito" class="modal-exito-overlay">
        <div class="modal-exito-contenido">
            <h2>¡Mensaje enviado!</h2>
            <p>Gracias por contactarnos. Hemos recibido tu mensaje y te responderemos lo antes posible.</p>
            <button id="cerrar-modal-exito">Cerrar</button>
        </div>
    </div>


    <!-- ================================================ VALIDACIONES DE JAVASCRIPT ========================================== -->
    <script src="/HotelixHub/codigo/assets/js/home.js"></script>
</body>
</html>
