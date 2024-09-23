<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería del Gimnasio Olimpio</title>
    <style>
        /* Estilos CSS personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .gym-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .gym-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            flex: 1;
            max-width: 32%;
            display: flex;
            flex-direction: column;
        }

        .gym-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .gym-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .gym-card-body {
            padding: 15px;
            text-align: center;
            flex-grow: 1;
        }

        .gym-card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }

        .gym-card-text {
            font-size: 1rem;
            color: #666;
        }

        @media (max-width: 768px) {
            .gym-container {
                flex-direction: column;
                align-items: center;
            }

            .gym-card {
                max-width: 100%;
                margin-bottom: 20px;
            }

            .gym-card img {
                height: 150px;
            }
        }
        .gym-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<h1 class="gym-title">Gimnasio Olimpio</h1>
    <div class="gym-container">
        <div class="gym-card">
            <img src="./src/images/gym/health-club.jpg" alt="Zona de Entrenamiento">
            <div class="gym-card-body">
                <h5 class="gym-card-title">Zona de Entrenamiento</h5>
                <p class="gym-card-text">Disfruta de nuestras instalaciones de alta calidad en un ambiente saludable.</p>
            </div>
        </div>
        <div class="gym-card">
            <img src="./src/images/gym/sun_cruise_hotel_12.jpg" alt="Área de Pesas">
            <div class="gym-card-body">
                <h5 class="gym-card-title">Solo lo mejor</h5>
                <p class="gym-card-text">Equipos de última generación para un entrenamiento completo y seguro.</p>
            </div>
        </div>
        <div class="gym-card">
            <img src="./src/images/spa/spa-center (1).jpg" alt="Zona de Relajación">
            <div class="gym-card-body">
                <h5 class="gym-card-title">Zona de Relajación</h5>
                <p class="gym-card-text">Relájate y recupérate después de un intenso entrenamiento.</p>
            </div>
        </div>
    </div>
</body>
</html>
