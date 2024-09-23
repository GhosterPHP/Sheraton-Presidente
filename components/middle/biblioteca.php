<style>
        /* Estilo general del contenedor de la galería */
        #gallery-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Estilo del título */
        #gallery-section h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #333;
        }

        /* Estilo del contenedor de las tarjetas */
        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Estilo de cada tarjeta */
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: calc(33.333% - 20px); /* Ajusta el ancho de las tarjetas */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Estilo de la imagen dentro de la tarjeta */
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Estilo del contenido de la tarjeta */
        .card-body {
            padding: 15px;
        }

        /* Estilo del efecto hover */
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Aseguramos que las tarjetas se ajusten en pantallas pequeñas */
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .section-title {
            font-size: 1.75rem;
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
        }
        .section-content {
            margin-bottom: 40px;
        }
        .section-content p {
            font-size: 1.1rem;
            margin-bottom: 15px;
            text-align: justify;
        }
        .section-content h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        .section-content ul {
            list-style-type: none;
            padding: 0;
        }
        .section-content ul li {
            margin-bottom: 10px;
        }
        .titulo{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <!-- Sección de Galería de Imágenes con ID personalizado -->
    <section id="gallery-section">
        <h2>Biblioteca Codice de Atlantis</h2>
        <div class="card-container">
            <!-- Imagen 1 -->
            <div class="card">
                <img src="./src/images/biblioteca1.jpg" class="card-img-top" alt="Descripción de la imagen 1">
                <div class="card-body">
                    <h5 class="card-title">Sala de Lectura Elegante</h5>
                    <p class="card-text">Un espacio de lectura cuidadosamente diseñado, que combina la comodidad y el estilo en un ambiente sereno. Las sillas dispuestas en una disposición acogedora invitan a sumergirse en la lectura, ofreciendo un entorno ideal para disfrutar de un buen libro.</p>
                </div>
            </div>
            <!-- Imagen 2 -->
            <div class="card">
                <img src="./src/images/biblioteca2.jpg" class="card-img-top" alt="Descripción de la imagen 2">
                <div class="card-body">
                    <h5 class="card-title">Sala de Reunión Acogedora</h5>
                    <p class="card-text">Una sala de reunión íntima y sofisticada, equipada con cómodos sofás y libreras laterales. Este ambiente está diseñado para fomentar conversaciones significativas y proporcionar un entorno relajado para discusiones y colaboración.</p>
                </div>
            </div>
            <!-- Imagen 3 -->
            <div class="card">
                <img src="./src/images/biblioteca3jpg.jpg" class="card-img-top" alt="Descripción de la imagen 3">
                <div class="card-body">
                    <h5 class="card-title">Momento de Lectura Compartido</h5>
                    <p class="card-text">Dos personas disfrutando de un momento de lectura compartido, irradiando felicidad y satisfacción. Este retrato captura la esencia del placer de leer en compañía, destacando la conexión especial que se forma a través de la literatura.</p>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="section-content">
            <h4 class="titulo">Una Biblioteca de Distinción</h4>
            <p>
                Codice de Atlantis se erige como un referente de elegancia y sofisticación en el mundo de las bibliotecas. Su diseño interior, meticulosamente concebido, ofrece un entorno que combina la comodidad con la estética, creando un espacio ideal para el disfrute de la lectura y el estudio. 
            </p>
            <p>
                Con una arquitectura que resalta la serenidad y el refinamiento, cada área de la biblioteca está pensada para proporcionar una experiencia única. Las zonas de lectura, equipadas con mobiliario de alta calidad, invitan a sumergirse en los libros en un ambiente que promueve la concentración y el bienestar. 
            </p>
            <p>
                Codice de Atlantis no solo es un lugar para el estudio, sino también un espacio de encuentro cultural. Su atmósfera acogedora facilita el intercambio de ideas y el disfrute de eventos literarios, haciendo de este espacio un verdadero centro de conocimiento y comunidad. 
            </p>
            <p>
                En cada rincón de Codice de Atlantis, la dedicación al detalle y la búsqueda de la excelencia se hacen evidentes, ofreciendo a sus visitantes un lugar donde el amor por la lectura y la búsqueda de la perfección se encuentran en perfecta armonía.
            </p>
        </div>
    </div>
    </section>
</body>
</html>