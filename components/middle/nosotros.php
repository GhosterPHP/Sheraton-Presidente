<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
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

        .hero-section {
            background: url('https://www.sovereign.com/-/media/bynder/sovereign-properties/greece/crete/grecotel-white-palace/facilities/grecotel-white-palace-2022-swimming-pool-001-121837-hybris.jpg?rev=b9ca38cb6f5c4a1bba45f6e18a17c91c') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
            text-align: center;
            color: #ffffff;
            /* text borde */
            text-shadow: 3px 2px 4px rgba(0, 0, 0, 0.9);
        }

        .hero-section h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 20px;
            background-color: #63636333;
        }

           .card {
            margin-bottom: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            border-radius: 15px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            background-color: #fff; 
            overflow: hidden;
        }
        
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: start;
            padding: 15px; 
        }
        
        .card-text {
            text-align: justify;
            color: #333; 
            font-size: 16px;
            line-height: 1.5; 
        }
    </style>
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
                <li><a href="../../index.php"><i class="bi bi-house-fill" style="margin-right: 8px;"></i> Inicio</a></li>
                <li><a href="./components/middle/nosotros.php"><i class="bi bi-people-fill" style="margin-right: 8px;"></i> Sobre Nosotros</a></li>
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
                <li><a href="restaurant.php"><i class="fas fa-utensils" style="margin-right: 8px;"></i> Restaurant</a></li>
                <li><a href="../../src/forms/src/reservar.php"> <i class="fas fa-key" style="margin-right: 8px;"></i> Reservaciones</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero-section">
    <h1 class="animate__animated animate__fadeInUp">Hotel Paraíso del Pacífico</h1>
    <p class="animate__animated animate__fadeInUp animate__delay-1s">Redefiniendo el concepto de lujo frente al mar</p>
    </section>

    <section class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="text-center animate__animated animate__fadeInUp">¿Quiénes somos?</h2>
            <p class="text-justified mt-3 animate__animated animate__fadeInUp animate__delay-1s">Bienvenidos a Hotel Paraíso del Pacífico, un exclusivo hotel cinco estrellas que redefine el concepto de lujo frente al mar. Nuestro hotel, inspirado en la majestuosidad de un crucero, se erige imponente sobre los acantilados que bordean las espectaculares costas del Pacífico, ofreciendo a nuestros huéspedes una experiencia única y memorable.</p>
            <p class="text-justified animate__animated animate__fadeInUp animate__delay-2s">Hotel Paraíso del Pacífico combina la elegancia de un crucero de lujo con la serenidad de un entorno natural inigualable. Con una arquitectura que simula un lujoso transatlántico anclado en la montaña, nuestras instalaciones están diseñadas para brindar una sensación de aventura y confort al mismo tiempo. Desde nuestras habitaciones con vistas al océano hasta nuestras exclusivas áreas recreativas, cada espacio ha sido meticulosamente pensado para su disfrute.</p>
        </div>
    </div>

        <div class="row">
        <div class="col-md-4 d-flex">
            <div class="card text-center shadow-sm flex-fill animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h4 class="card-title">Misión</h4>
                    <p class="card-text">Ofrecer servicios hoteleros de clasificación 5 estrellas de todo incluido premium con actividades turísticas locales de orientación en el wellness y facilidades inclusivas, involucrado con la responsabilidad social.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card text-center shadow-sm flex-fill animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h4 class="card-title">Visión</h4>
                    <p class="card-text">Ser reconocidos globalmente como el hotel que redefine el lujo en destinos costeros, siendo un faro de innovación y excelencia en la hospitalidad. Aspiramos a ser el hotel elegido por los viajeros más exigentes que buscan no solo un lugar para descansar, sino un entorno que inspire y sorprenda.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card text-center shadow-sm flex-fill animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h4 class="card-title">Valores</h4>
                    <p class="card-text"><strong>Responsabilidad:</strong> con clientes, entregar servicios de calidad. Compañeros estabilidad laboral y sociedad respetar al medio ambiente y las normas sociales.</p>
                    <p class="card-text"><strong>Perseverancia:</strong> Logra negocios productivos manteniendo el camino a la mejora.</p>
                    <p class="card-text"><strong>Confiabilidad:</strong> Cumplimientos con los compromisos adquiridos con nuestros clientes.</p>
                    <p class="card-text"><strong>Servicio:</strong> Atención con cortesía, amabilidad, y entendimiento con nuestros clientes.</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php require_once '../../components/footer/footer.php'; ?>
</body>

</html>