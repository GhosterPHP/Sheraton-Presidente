<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suite Neptuno</title>
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
                        <li poseidon><a href="suiteposeidon.php">🔱 Suite Poseidón</a></li>
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
            <div class="card-header">Suite Neptuno 🦑</div>
            <div class="card-body">
                <div class="gallery">
                    <img src="../../src/images/habitacion suidtes neptuno/220v0u000000jkyh68888_W_1280_853_R5.webp" alt="Imagen 1">
                    <img src="../../src/images/habitacion suidtes neptuno/02064120009p7l8y4046D_W_1280_853_R5.webp" alt="Imagen 2">
                    <img src="../../src/images/habitacion suidtes neptuno/guest-room.jpg" alt="Imagen 3">
                </div>
                <div class="card-text">
                    Sumérgete en el lujo absoluto con la Suite Neptuno, donde la elegancia y la comodidad se encuentran en su máxima expresión. Esta exclusiva suite está diseñada para ofrecer una experiencia sin igual, combinando sofisticación con los más altos estándares de confort.

                    La Suite Neptuno cuenta con una gran sala de estar equipada con una pantalla de 70 pulgadas Full HD, ideal para disfrutar de tus programas y películas favoritas con una calidad visual inigualable. La sala está elegantemente decorada, creando un ambiente acogedor y moderno que te hará sentir como en casa.

                    Tu descanso está garantizado en nuestra cómoda cama, elaborada con los mejores materiales para proporcionar un sueño reparador. Cada detalle ha sido cuidadosamente seleccionado para asegurar el máximo confort, desde el colchón de alta gama hasta la lujosa ropa de cama.

                    El baño super lujoso de la Suite Neptuno ofrece un oasis de relajación y bienestar. Equipado con todas las comodidades modernas, este espacio incluye una ducha de efecto lluvia, bañera independiente y una selección de productos de baño de alta calidad. La atención al detalle en el diseño asegura una experiencia de baño que es tanto indulgente como rejuvenecedora.

                    Cada rincón de la Suite Neptuno ha sido diseñado para ofrecerte una estancia memorable, combinando elegancia, confort y una atención al detalle que supera todas las expectativas. Ven y descubre el pináculo del lujo en nuestra suite más distinguida.
                </div>
            </div>
            <div class="card-footer">
                <a href="../../src/forms/src/reservar.php?suite=Suite%20Neptuno" class="btn-primary">
                    <i class="fas fa-calendar-check"></i> Reservar
                </a>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <?php 
    include_once '../footer/footer.php';
    ?>