<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
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

        .hero-carousel {
            position: relative;
            max-width: 100%;
            height: 600px;
            /* Ajusta el tamaño según tus necesidades */
            overflow: hidden;
        }

        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.5s ease;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #fff;
            text-shadow: 3px 2px 4px rgba(0, 0, 0, 0.9);
            margin-bottom: 7rem;
        }

        .carousel-slide.active {
            opacity: 1;
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            z-index: 100;
        }

        .carousel-control-prev {
            left: 10px;
        }

        .carousel-control-next {
            right: 10px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            color: #262626;
        }

        .content-section {
            padding: 50px 15px;
            text-align: justify;
        }

        .text-justify-custom {
            text-align: justify;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }
        .menu{
            text-align: center;
            border-radius: 7px;
            width: 70%;
        }
        .btn-custom {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: #fff;
            cursor: pointer;
        }

        /* Estilos del modal */
        .modal {
            display: none; /* Ocultamos el modal por defecto */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 8px;
            padding: 10px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30%;
        }

        .modal-content img {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }
        .pescado:hover{
            cursor: pointer;
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
    <section id="heroCarousel" class="hero-carousel">
        <div class="carousel-slide active">
            <img src="../../src/images/fotos de restaurante/11bcc5cfd5a5c854e5e588ac508ef9c1.webp" alt="Imagen 1">
            <div class="carousel-caption">
                <h1>Restaurant Coral de Fuego</h1>
                <p>"Disfruta de una experiencia gastronómica única, con platos elaborados por chefs de renombre internacional, utilizando solo los ingredientes más frescos y de la más alta calidad."</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="../../src/images/fotos de restaurante/220h10000000oq3k3CC3D_W_1280_853_R5.webp" alt="Imagen 2">
            <div class="carousel-caption">
                <h1>Elegancia y Confort en Cada Detalle</h1>
                <p>"Sumérgete en un ambiente de lujo, donde el diseño moderno se fusiona con la calidez y el confort, creando el lugar perfecto para una velada inolvidable."</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="../../src/images/fotos de restaurante/220m10000000oxwtk2C8A_W_1280_853_R5.webp" alt="Imagen 3">
            <div class="carousel-caption">
                <h1>Atención Personalizada, Servicio de Excelencia</h1>
                <p>"Nuestro equipo está dedicado a brindar un servicio impecable, anticipando cada una de tus necesidades para garantizar una experiencia memorable en cada visita."</p>
            </div>
        </div>

        <!-- Controles del carrusel -->
        <button class="carousel-control-prev" id="prevBtn">&#10094;</button>
        <button class="carousel-control-next" id="nextBtn">&#10095;</button>
    </section>
    <section class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="display-4">Descubre la Cumbre de la Gastronomía</h2>
                <p class="lead mt-4 text-justify-custom">En <strong>Coral de Fuego</strong>, transformamos cada comida en una experiencia sensorial inigualable. Situado en el corazón de nuestro hotel de cinco estrellas, nuestro restaurante ofrece una fusión exquisita entre tradición culinaria y vanguardia gastronómica, en un entorno que redefine el concepto de lujo.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 mb-4">
                <h3>Nuestra Propuesta</h3>
                <p class="text-justify-custom">Cada plato que sale de nuestra cocina es una obra de arte, meticulosamente elaborada con ingredientes frescos y de origen local. Nuestro menú ha sido diseñado para ofrecer una variedad selecta de platos que rinden homenaje a las raíces de la cocina tradicional, mientras incorporan toques contemporáneos que sorprenden y deleitan. Bajo la dirección de chefs reconocidos a nivel internacional, Coral de Fuego se enorgullece de ofrecer una experiencia gastronómica que es tan inolvidable como única.</p>
                <div class="mt-4">
                    <img src="../../src/images/fotos de restaurante/rixos-premium-belek.jpg" class="img-fluid rounded" alt="Imagen Representativa">
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <h3>Excelencia en Cada Detalle</h3>
                <p class="text-justify-custom">En Coral de Fuego, entendemos que una experiencia culinaria sobresaliente no se limita al plato; incluye un servicio impecable y un ambiente que inspira. Nuestro personal altamente capacitado se dedica a anticipar cada necesidad, garantizando una experiencia personalizada y sin igual. Desde una cena íntima hasta un evento corporativo, cada visita es atendida con el máximo cuidado y atención al detalle. <strong>Obtenga acceso a nuestro menu haciendo click en la imagen</strong></p>
                <div class="mt-4">
                    <img src="../../src/images/fotos de restaurante/restaurant (1).jpg" class="img-fluid rounded" alt="Imagen Representativa" id="menuBtn" class="pescado">
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <h3>Reserve Su Experiencia</h3>
                <p class="text-justify-custom">Te invitamos a vivir una experiencia culinaria que combina la excelencia gastronómica con un servicio de primera clase. En Coral de Fuego, cada comida es una celebración de los sentidos. Haz tu reserva hoy y permite que nuestro equipo te guíe en un viaje gastronómico extraordinario.</p>
                <div class="mt-4">
                    <img src="../../src/images/fotos de restaurante/rixos-premium-belek (1).jpg" class="img-fluid rounded" alt="Imagen Representativa">
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal" id="menuModal">
        <div class="modal-content">
            <img src="../../src/images/coral.png" style="width: 40%">
            <p>Menu Digital</p>
            <span class="close" id="closeBtn">&times;</span>
            <img src="../../src/images/Menu Coral de Fuego.png" alt="Menú">
        </div>
    </div>

    <script>
        // Funcionalidad del modal
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('menuBtn');
            const menuModal = document.getElementById('menuModal');
            const closeBtn = document.getElementById('closeBtn');

            menuBtn.addEventListener('click', function() {
                menuModal.style.display = 'flex';
            });

            closeBtn.addEventListener('click', function() {
                menuModal.style.display = 'none';
            });

            // Cerrar el modal si se hace clic fuera del contenido
            window.addEventListener('click', function(event) {
                if (event.target === menuModal) {
                    menuModal.style.display = 'none';
                }
            });
        });
    </script>
    <?php require_once '../../components/footer/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        // Cambia de imagen automáticamente cada 4 segundos
        setInterval(nextSlide, 8000);
    });
</script>

</html>