<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@2.6.4/dist/email.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .input-group, .form-label, .form-control, input.form-control {
            position: static; /* Asegura que el posicionamiento sea estático */
        }
        a {
            font-family: 'Britanic';
            src: url('./src/fonts/Britanic.ttf');
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #e9ecef;
        }

        .formulario-reserva {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            border: 1px solid #dee2e6;
        }

        .formulario-reserva .form-label {
            font-weight: bold;
            color: #495057;
        }

        .formulario-reserva button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 12px 24px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .formulario-reserva button:hover {
            background-color: #0056b3;
        }

        /* Para que el botón tenga un estilo aún más integrado con Bootstrap */
        .formulario-reserva .btn {
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .formulario-reserva .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #ffffff;
        }

        .formulario-reserva .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        header.sticky {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header.sticky div[logo] {
            display: flex;
            align-items: center;
        }

        header.sticky div[logo] .Titulo {
            margin-left: 15px;
            text-align: center;
            line-height: 1;
        }

        header.sticky div[logo] .Titulo p {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        header.sticky div[logo] .Titulo p.tiny {
            font-size: 12px;
            font-weight: normal;
        }

        header.sticky p[Bienvenida] {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            margin: 0;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            list-style: none;
            padding-left: 0;
            display: flex;
            margin: 0;
        }

        nav ul li {
            margin: 0 15px;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            display: flex;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        nav ul li ul.dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            list-style: none;
        }

        nav ul li:hover ul.dropdown {
            display: block;
        }

        nav ul li ul.dropdown li {
            margin: 0;
        }

        nav ul li ul.dropdown li a {
            padding: 5px 10px;
            white-space: nowrap;
            display: block;
            color: #333;
            font-weight: normal;
        }

        nav ul li ul.dropdown li a:hover {
            color: #676767;
        }

        span[scrollindicador] {
            display: none;
        }
        .footer{
            text-align: center;
        }
        .contact-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .contact-item {
        margin: 0 15px;
        display: flex;
        align-items: center;
    }
    .contact-item i {
        margin-right: 10px;
        color: #007bff;
    }
    .contact-item span {
        font-size: 1rem;
        color: #333;
    }
    </style>
    <link rel="stylesheet" href="../../css/header.css">
</head>

<body>
    <header class="sticky">
        <div logo>
            <span icon></span>
            <div class="Titulo">
                <p>Paraíso</p>
                <p class="tiny">del</p>
                <p>Pacífico</p>
            </div>
        </div>
        <p Bienvenida>¡Tu mejor opción!</p>
        <nav>
            <ul>
                <li><a href="../../../index.php"><i class="bi bi-house-fill" style="margin-right: 8px;"></i> Inicio</a></li>
                <li><a href="../../../components/middle/nosotros.php"><i class="bi bi-people-fill" style="margin-right: 8px;"></i> Sobre Nosotros</a></li>
                <li>
                    <a href="#habitaciones" drop>
                        <i class="fas fa-bed" style="margin-right: 8px;"></i> Suites
                        <span style="color: white;">&#9660;</span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="../../../components/middle/suiteneptuno.php">🦑 Suite Neptuno</a></li>
                        <li><a href="../../../components/middle/suiteatlantis.php">🌊 Suite Atlantis</a></li>
                        <li class="poseidon"><a href="../../../components/middle/suiteposeidon.php">🔱 Suite Poseidón</a></li>
                    </ul>
                </li>
                <li><a href="../../../components/middle/restaurant.php"><i class="fas fa-utensils" style="margin-right: 8px;"></i> Restaurant</a></li>
                <li><a href="./src/forms/src/reservar.php"><i class="fas fa-key" style="margin-right: 8px;"></i> Reservaciones</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <br><br><br>
    <div class="formulario-reserva">
        <div style="text-align: center;">
            <img src="../../../src/images/logo.png" style="width: 55%;">
        </div>
        <form id="reservaForm" method="post" action="../procesar_reserva.php">
            <div class="mb-3">
                <label for="suite" class="form-label">Seleccione su suite:</label>
                <select id="suite" name="suite" class="form-select" required>
                    <option value="Habitaciones Estándar" <?php echo (isset($_GET['suite']) && @$_GET['suite'] == 'Habitaciones Estándar') ? 'selected' : ''; ?>>Habitaciones Estándar</option>
                    <option value="Habitaciones Familiares" <?php echo (isset($_GET['suite']) && @$_GET['suite'] == 'Habitaciones Familiares') ? 'selected' : ''; ?>>Habitaciones Familiares</option>
                    <option value="Habitaciones Deluxe" <?php echo (isset($_GET['suite']) && @$_GET['suite'] == 'Habitaciones Deluxe') ? 'selected' : ''; ?>>Habitaciones Deluxe</option>
                    <option value="Suites Junior" <?php echo (isset($_GET['suite']) && @$_GET['suite'] == 'Suites Junior') ? 'selected' : ''; ?>>Suites Junior</option>
                    <option value="Suite Neptuno" <?php echo (isset($_GET['suite']) && @$_GET['suite'] == 'Suite Neptuno') ? 'selected' : ''; ?>>Suite Neptuno 🦑</option>
                    <option value="Suite Atlantis" <?php echo (isset($_GET['suite']) && @$_GET['suite'] == 'Suite Atlantis') ? 'selected' : ''; ?>>Suite Atlantis 🌊</option>
                    <option value="Suite Poseidon" <?php echo (isset($_GET['suite']) && @$_GET['suite'] == 'Suite Poseidon') ? 'selected' : ''; ?>>Suite Poseidon 🔱</option>
                </select>
            </div>

            <label for="nombre" class="form-label">Ingrese su nombre completo:</label>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
                <input type="text" style="position: static;" class="form-control" name="nombre" placeholder="Nombre completo" required autocomplete="off">
            </div>

            <label for="correo" class="form-label">Correo Electrónico:</label>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                <input type="email" style="position: static;" class="form-control" spellcheck="@" name="correo" autocomplete="off" placeholder="Correo electrónico" required>
            </div>

            <label for="telefono" class="form-label">Numero de telefono:</label>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input type="tel" class="form-control" name="telefono" maxlength="8" autocomplete="off" placeholder="Número de teléfono" required>
            </div>

            <label for="fecha_reserva" class="form-label">Fecha de Reservación:</label>

            <div class="input-group mb-3">

                <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                <input type="date" id="fecha_reserva" name="fecha_reserva" class="form-control" required>
            </div>

            <label for="numero_noches" class="form-label">Número de noches:</label>


            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-moon-fill"></i></span>
                <input type="number" id="numero_noches" name="numero_noches" class="form-control" min="1" max="7" required>
            </div>


            <div class="mb-3">
                <label for="costo_total" class="form-label">Costo Total:</label>
                <input type="text" id="costo_total" name="costo_total" class="form-control cost-input" readonly>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-chat-right-text-fill"></i></span>
                <textarea class="form-control" name="notas" placeholder="Notas especiales o requisitos adicionales"></textarea>
            </div>

            <div class="text-center">
            <button id="confirmarReserva" class="btn btn-primary">Confirmar Reserva</button>
        </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const suiteSelect = document.getElementById('suite');
            const checkinInput = document.getElementById('fecha_checkin');
            const checkoutInput = document.getElementById('fecha_checkout');
            const nochesInput = document.getElementById('numero_noches');
            const costoTotalInput = document.getElementById('costo_total');

            const precios = {
                'Habitaciones Estándar': {
                    noche: 80,
                    semanal: 500
                },
                'Habitaciones Familiares': {
                    noche: 140,
                    semanal: 900
                },
                'Habitaciones Deluxe': {
                    noche: 170,
                    semanal: 1050
                },
                'Suites Junior': {
                    noche: 185,
                    semanal: 1150
                },
                'Suite Neptuno':{
                    noche: 350,
                    semanal: 1600
                },
                'Suite Atlantis':{
                    noche: 560,
                    semanal: 1800
                },
                'Suite Poseidon':{
                    noche: 750,
                    semanal: 2300,
                }
            };

            function calcularCostoTotal() {
                const suite = suiteSelect.value;
                const noches = parseInt(nochesInput.value) || 0;

                let costoPorNoche = precios[suite] ? precios[suite].noche : 0;
                let costoTotal = noches * costoPorNoche;

                // Aplicar descuento semanal si se reservan 7 noches o más
                if (noches >= 7) {
                    costoTotal = precios[suite] ? precios[suite].semanal : 0;
                }

                // Actualizar el campo de costo total con símbolo de dólar
                costoTotalInput.value = `$${costoTotal.toFixed(2)}`; // Asegura que el valor se muestra con dos decimales
            }

            // Eventos para recalcular el costo total cuando cambian los datos
            suiteSelect.addEventListener('change', calcularCostoTotal);
            nochesInput.addEventListener('input', calcularCostoTotal);
        });
    </script>

    <!-- Incluye los scripts de EmailJS y SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body><br><br>
<?php
require_once '../../../components/footer/footer.php';
?>
</html>