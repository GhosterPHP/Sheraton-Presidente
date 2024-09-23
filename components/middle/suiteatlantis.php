<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suite Atlantis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/header.css">
    <link rel="stylesheet" href="../../src/css/footer.css">
    <style>
        header.sticky {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
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
            color: white;
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
            color: white;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            align-items: center;
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

        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #343a40;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        /* Estilos de la tarjeta */
        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 90vw;
            /* Ajusta el ancho de la tarjeta */
            max-width: 1400px;
            /* Establece un ancho máximo mayor */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card-header,
        .card-footer {
            padding: 15px;
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .card-body {
            padding: 0;
        }

        .gallery {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 15px;
            overflow-x: auto;
            /* Permite desplazamiento horizontal */
            white-space: nowrap;
            /* Mantiene las imágenes en una fila */
        }

        .gallery img {
            width: 400px;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
        }

        .card-text {
            padding: 15px;
            font-size: 16px;
            color: #555;
            text-align: justify;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
    <link rel="stylesheet" href="../../src/css/footer.css">

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
                <li><a href="../../index.php"><i class="bi bi-house-fill" style="margin-right: 8px;"></i> Inicio</a></li>
                <li><a href="nosotros.php"><i class="bi bi-people-fill" style="margin-right: 8px;"></i> Sobre Nosotros</a></li>
                <li>
                    <a href="#habitaciones" drop>
                        <i class="fas fa-bed" style="margin-right: 8px;"></i> Suites
                        <span style="color: white;">&#9660;</span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="suiteneptuno.php">🦑 Suite Neptuno</a></li>
                        <li><a href="suiteatlantis.php">🌊 Suite Atlantis</a></li>
                        <li poseidon><a href="suiteposeidons.php">🔱 Suite Poseidón</a></li>
                    </ul>
                </li>
                <li><a href="#servicios"><i class="fas fa-utensils" style="margin-right: 8px;"></i> Restaurant</a></li>
                <li><a href="../../src/forms/src/reservar.php"> <i class="fas fa-key" style="margin-right: 8px;"></i> Reservaciones</a></li>
            </ul>
        </nav>
    </header>
    <br><br><br><br>
    <div class="card-container">
        <div class="card">
            <div class="card-header">Suite Atlantis 🌊</div>
            <div class="card-body">
                <div class="gallery">
                    <img src="../../src/images/habitacion Atlantis/200a170000012c48q53AB_W_1280_853_R5.webp" alt="Imagen 1">
                    <img src="../../src/images/habitacion Atlantis/200c170000012dfik2B5F_W_1280_853_R5.webp" alt="Imagen 2">
                    <img src="../../src/images/habitacion Atlantis/02225120009zu4l712FB1_W_1280_853_R5.webp" alt="Imagen 3">
                </div>
                <div class="card-text">
                    Descubre la serenidad y el lujo en la Suite Atlantis, un refugio sublime con impresionantes vistas al mar que te permitirán contemplar la belleza del océano en su máxima expresión. Esta suite ha sido diseñada para ofrecer una experiencia de alojamiento inigualable, donde cada detalle está pensado para tu confort y deleite.

                    La suite cuenta con una sala de estar y cocina enormes, proporcionando un espacio amplio y elegante para relajarte y disfrutar. La sala de estar está adornada con muebles sofisticados y cómodos, ideal para momentos de ocio o para recibir a tus invitados en un entorno de lujo.

                    La cocina, completamente equipada, es un sueño hecho realidad para los amantes de la gastronomía. Con modernos electrodomésticos de alta gama y amplias superficies de trabajo, te permitirá preparar desde comidas sencillas hasta banquetes gourmet, todo mientras disfrutas de las vistas panorámicas al océano.

                    Cada rincón de la Suite Atlantis está diseñado para ofrecer una experiencia de lujo y comodidad sin igual. Desde las amplias áreas de estar hasta las vistas impresionantes que se extienden hasta el horizonte, esta suite redefine el concepto de elegancia y sofisticación.
                </div>
            </div>
            <div class="card-footer">
                <a href="../../src/forms/src/reservar.php?suite=Suite%20Atlantis" class="btn-primary">
                    <i class="fas fa-calendar-check"></i> Reservar
                </a>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <?php
    include_once '../footer/footer.php';
    ?>