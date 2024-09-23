<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campos Elíseos</title>
    <style>
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .gallery-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .gallery-row {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            gap: 15px; /* Espacio entre las imágenes */
        }
        .gallery-item {
            flex: 1;
            max-width: 440px; /* Limita el ancho máximo de cada imagen */
            position: relative;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease-in-out;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 1rem;
            font-weight: bold;
        }
        .description {
            margin-top: 20px;
            font-size: 1.1rem;
            color: #333;
            text-align: justify;
        }
        .description h2, .description h3 {
            color: #222;
            font-weight: bold;
        }
        .description p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="gallery-title">Campos Elíseos</div>
        <div class="gallery-row">
            <div class="gallery-item">
                <img src="./src/images/zonas verdes/11c8c20bf0b84cb09343c022de4e6419_W_1280_853_R5.webp" alt="Zona Verde del Hotel">
                <div class="gallery-caption">Campos Elíseos - Manos de Polibotes</div>
            </div>
            <div class="gallery-item">
                <img src="./src/images/zonas verdes/22060r000000gx81k192E_W_1280_853_R5.webp" alt="Zona Verde del Hotel">
                <div class="gallery-caption">Campos Elíseos - Jardines Exquisitos</div>
            </div>
            <!-- Asegúrate de agregar una tercera imagen o eliminar esta sección si no es necesaria -->
            <!--
            <div class="gallery-item">
                <img src="./src/images/zonas verdes/tu-tercera-imagen.webp" alt="Otra zona del hotel">
                <div class="gallery-caption">Campos Elíseos - Tercer Espacio</div>
            </div>
            -->
        </div>
        <div class="description">
            <h2>Bienvenido a Campos Elíseos</h2>
            <p>
                Campos Elíseos es un destino de lujo que ofrece el hotel Paraiso del Pacifico. Diseñado para proporcionar un refugio de tranquilidad y sofisticación, el hotel destaca por sus impresionantes zonas verdes, cada una con su propio carácter distintivo.
            </p>
            <h3>Jardines Exquisitos</h3>
            <p>
                Nuestros Jardines Exquisitos son un oasis de belleza y serenidad. Cada rincón está meticulosamente cuidado para ofrecer un ambiente de relajación absoluta. Pasee por senderos rodeados de flores vibrantes, admire las fuentes artísticas y disfrute del toque de elegancia que cada elemento añade al entorno natural.
            </p>
            <h3>Manos de Polibotes</h3>
            <p>
                La zona "Manos de Polibotes" es un espacio diseñado para la contemplación y el descanso inspirado en "el gigante polibotes" quien mantuvo un combate singular con el dios Poseidón. Con amplias áreas verdes y cómodos asientos, esta zona invita a los huéspedes a relajarse bajo la sombra de los árboles y disfrutar de la tranquilidad del entorno. Es el lugar ideal para relajarse, leer un libro o simplemente disfrutar de la paz que ofrece la naturaleza.
            </p>
            <p>
                En Campos Elíseos, cada detalle está pensado para ofrecer un equilibrio perfecto entre lujo y naturaleza, proporcionando a nuestros huéspedes una experiencia de confort y belleza inigualable.
            </p>
        </div>
    </div>
</body>
</html>
