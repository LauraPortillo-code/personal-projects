<?php
require_once __DIR__ . '/../services/sessionManager.php';


if (!isset($_SESSION['usuario'])) {
    header('Location: ../views/login.php');
    exit();
}

// Verificar que el rol sea cliente
if ($_SESSION['usuario']['usu_idrol'] != 2) {
    header('Location: ../views/login.php'); // O a una página de error
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="../assets/css/reservas.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <!-- Contenedor principal del dashboard -->
    <div class="dashboard-container">
        <!-- BARRA DE NAVEGACIÓN -->
        <div class="nav">
            <!-- Logo y enlace a Home -->
            <div class="nav-izquierda">
                <a href="dashCliente.php"><img src="../assets/img/imgReservas/Logo Positivo.png" alt="Logo" width="200px" height="60px"></a>
            </div>
          
            <!-- Título y subtítulo de la página -->
            <div class="nav-centro">
              <h2>Reservas</h2>
              <p>Tu descanso empieza aquí</p>
            </div>
          
            <!-- Botón para ver reservas existentes -->
            <div class="nav-derecha">
                <a href="dashCliente.php" class="btn-inicio" id="btn-inicio">Inicio</a>
                <button id="btn-nav" class="btn-mis-reservas">Mis Reservas</button>
            </div>

        </div>
          
        <!-- SECCIÓN DE HABITACIONES DISPONIBLES -->
        <section class="habitaciones" id="contenedor-habitaciones">
        </section>
          
        <!-- CONTENIDO PRINCIPAL - FORMULARIO DE RESERVA -->
        <div class="main-content">
            <!-- Encabezado del formulario -->
            <div class="header">
                <h1>Nueva Reserva</h1>
                <p>Completa el formulario para realizar tu reserva</p>
            </div>

            <!-- FORMULARIO DE RESERVA -->
            <form class="reserva-form" id="formulario-reserva">
                <!-- Sección 1: Datos personales -->
                <div class="form-seccion">
                    <h3>Introduce tus Datos</h3>
                    
                    <!-- Grupo: Nombre completo -->
                    <div class="form-grupo">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
                    </div>

                    <!-- Grupo: Apellido -->
                    <div class="form-grupo">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                    </div>

                    <!-- Grupo: Tipo de documento -->
                    <div class="form-grupo">
                        <label for="tipoDocumento">Tipo de Documento</label>
                        <select id="tipoDocumento" name="tipoDocumento" required>
                            <option value="">Seleccione...</option>
                            <option value="CC">Cédula de Ciudadanía (CC)</option>
                            <option value="TI">Tarjeta de Identidad (TI)</option>
                            <option value="CE">Cédula de Extranjería (CE)</option>
                            <option value="PA">Pasaporte (PA)</option>
                        </select>
                    </div>

                    <!-- Grupo: Número de documento -->
                    <div class="form-grupo">
                        <label for="numeroDocumento">Número de Documento</label>
                        <input type="text" id="numeroDocumento" name="numeroDocumento" placeholder="Ingrese su número de documento" required>
                    </div>
                    
                    <!-- Grupo: Teléfono -->
                    <div class="form-grupo">
                        <label for="telf">Teléfono</label>
                        <input type="tel" id="telf" name="telefono" placeholder="Ingrese su numero de telefono" autocomplete="phone" required>
                    </div>
                    
                    <!-- Grupo: Número de huéspedes -->
                    <div class="form-grupo">
                        <label for="huesped">Número de Huéspedes</label>
                        <input type="number" id="huesped" name="huesped" placeholder="Ingrese el numero de personas" min="1" required>
                    </div>
                    
                    <!-- Grupo: Correo electrónico -->
                    <div class="form-grupo">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" placeholder="Ingrese su correo" autocomplete="email" required>
                    </div>

                    <!-- Grupo: Tipo de habitación (selección) -->
                    <div class="form-grupo">
                        <label for="tipo-habitacion">Tipo de Habitación</label>
                        <select id="tipo-habitacion" name="tipoHabitacion" required>
                            <option value="">Seleccione...</option>
                            <option value="sencilla">Sencilla</option>
                            <option value="doble">Doble</option>
                            <option value="triple">Triple</option>
                        </select>
                    </div>
                </div>

                <!-- Sección 2: Detalles de la estancia -->
                <div class="form-seccion">
                    <h3>Detalles de la Estancia</h3>
                    
                    <!-- Grupo: Fecha de entrada -->
                    <div class="form-grupo">
                        <label for="check-in">Fecha de Entrada</label>
                        <input type="date" id="check-in" name="checkIn" required>
                    </div>
                    
                    <!-- Grupo: Fecha de salida -->
                    <div class="form-grupo">
                        <label for="check-out">Fecha de Salida</label>
                        <input type="date" id="check-out" name="checkOut" required>
                    </div>

                    <!-- Grupo: Habitación asignada (solo lectura) -->
                    <div class="form-grupo">
                        <label for="habitacionAsignada">Habitación Asignada</label>
                        <input type="text" id="habitacionAsignada" name="habitacionAsignada" readonly>
                    </div>

                    <input type="hidden" id="id_habitacion_asignada" name="id_habitacion">

                    
                    <!-- Grupo: Servicios adicionales (checkboxes) -->
                    <div class="form-grupo">
                        <h4><strong>Servicios Adicionales</strong></h4>
                        <div class="servicios-container">
                            <!-- Opción 1: Spa -->
                            <div class="servicio-option">
                                <input type="checkbox" id="servicio-spa" name="servicios" value="Spa">
                                <label for="servicio-spa">Spa Relajante (+$80.000)</label>
                            </div>
                            <!-- Opción 2: Desayuno -->
                            <div class="servicio-option">
                                <input type="checkbox" id="servicio-desayuno" name="servicios" value="Desayuno Buffet">
                                <label for="servicio-desayuno">Desayuno Buffet (+$35.000 por persona)</label>
                            </div>
                            <!-- Opción 3: Parqueadero -->
                            <div class="servicio-option">
                                <input type="checkbox" id="servicio-parqueadero" name="servicios" value="Parqueadero">
                                <label for="servicio-parqueadero">Parqueadero Cubierto (+$20.000 por noche)</label>
                            </div>
                            <!-- Opción 4: Lavandería -->
                            <div class="servicio-option">
                                <input type="checkbox" id="servicio-lavanderia" name="servicios" value="Lavandería">
                                <label for="servicio-lavanderia">Servicio de Lavandería (+$45.000)</label>
                            </div>
                            <!-- Opción 5: Transporte -->
                            <div class="servicio-option">
                                <input type="checkbox" id="servicio-transporte" name="servicios" value="Transporte">
                                <label for="servicio-transporte">Transporte Aeropuerto (+$60.000)</label>
                            </div>
                        </div>
                        <!-- Mensaje de error (oculto inicialmente) -->
                        <small id="error-servicios" style="color: red; display: none;">Máximo 3 servicios permitidos.</small>
                    </div>
                </div>

                <!-- Botón de envío del formulario -->
                <button type="submit" class="btn btn-block"><strong>Confirmar Reserva</strong></button>
            </form>
        </div>
    </div>

    <!-- MODAL DE HISTORIAL DE RESERVAS (oculto inicialmente) -->
    <div id="modal-overlay" class="modal-overlay">
        <div class="modal-content">
            <!-- Botón para cerrar el modal -->
            <span class="close-modal">&times;</span>
            <h2>Historial de Reservas</h2>
            <!-- Contenedor donde se cargarán dinámicamente las reservas -->
            <div class="historial-contenedor">
                <!-- Mensaje por defecto cuando no hay reservas -->
                <p>No hay reservas registradas.</p>
            </div>
        </div>
    </div>

    <!-- MODAL DE CONFIRMACIÓN DE RESERVA -->
    <div id="modal-confirmacion" class="modal-confirmacion-reserva" style="display: none;">
        <div class="modal-contenido">
            <!-- Panel izquierdo: datos de la reserva -->
            <div class="modal-izquierda">
                <h2>Resumen de la Reserva</h2>
                <p><strong>Nombre:</strong> <span id="res-nombre"></span></p>
                <p><strong>Apellido:</strong> <span id="res-apellido"></span></p>
                <p><strong>Tipo de documento:</strong> <span id="res-doc-tipo"></span></p>
                <p><strong>Nº de documento:</strong> <span id="res-doc-num"></span></p>
                <p><strong>Email:</strong> <span id="res-email"></span></p>
                <p><strong>Teléfono:</strong> <span id="res-telefono"></span></p>
                <p><strong>Huespedes:</strong> <span id="res-huespedes"></span></p>
                <p><strong>Check-In:</strong> <span id="res-checkin"></span></p>
                <p><strong>Check-Out:</strong> <span id="res-checkout"></span></p>
                <p><strong>Servicios:</strong> <span id="res-servicios"></span></p>
            </div>

            <!-- Panel derecho: datos de la habitación -->
            <div class="modal-derecha">
                <img id="res-imagen" src="" alt="Imagen habitación">
                <h2>Habitación</h2>
                <p><strong>Nombre:</strong> <span id="res-hab-nombre"></span></p>
                <p><strong>Tipo:</strong> <span id="res-hab-tipo"></span></p>
                <p><strong>Piso:</strong> <span id="res-hab-piso"></span></p>
                <p><strong>Servicios incluidos:</strong> <span id="res-hab-servicios"></span></p>
                <p><strong>Precio:</strong> <span id="res-hab-precio"></span></p>
            </div>
        </div>

        <!-- Botón de confirmación -->
        <div class="modal-footer">
            <button id="btn-confirmar" class="btn-confirmar">Confirmar Reserva</button>
            <button id="btn-cancelar" class="btn-cancelar">Cancelar</button>
        </div>
    </div>

    <!-- Enlace al archivo JavaScript (con defer para ejecutar después de cargar el HTML) -->
    <script src="/HotelixHub/codigo/assets/js/home.js" defer></script>
    <script src="/HotelixHub/codigo/assets/js/reservas.js" defer></script>
</body>
</html>