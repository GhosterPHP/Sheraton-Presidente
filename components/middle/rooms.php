
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .contenedor-tarjetas {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .tarjeta {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .tarjeta-imagen {
            flex-shrink: 0;
            width: 100%;
        }

        .tarjeta-imagen img {
            width: 100%;
            height: auto;
            display: block;
        }

        .tarjeta-contenido {
            padding: 20px;
        }

        .tarjeta-contenido h2 {
            margin-top: 0;
            color: #333;
        }

        .tarjeta-contenido p {
            margin: 10px 0;
            color: #666;
        }

        .tarjeta-contenido .precio {
            font-weight: bold;
            color: #333;
        }

        .tarjeta:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .boton-reservar {
            display: inline-flex;
            align-items: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .boton-reservar:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .boton-reservar i {
            margin-right: 8px;
        }
    </style>

    <div class="contenedor-tarjetas">
        <div class="tarjeta">
            <div class="tarjeta-imagen">
                <img src="./src/images/habitacion estandar/0223p12000agchhuv2A0B_W_1280_853_R5.webp" alt="Imagen de la habitación">
            </div>
            <div class="tarjeta-contenido">
                <h2>Habitaciones Estándar</h2>
                <p>Nuestras habitaciones estándar están diseñadas para ofrecer comodidad y funcionalidad a un precio accesible. Cuentan con una cama queen size, aire acondicionado, TV satelital, acceso a Internet de alta velocidad, y baño privado con artículos de tocador de cortesía. Son perfectas para quienes buscan una estadía cómoda y sin complicaciones.</p>
                <p class="precio">Precio por noche: $80</p>
                <p class="precio">Precio semanal: $500</p>
                <a href="./src/forms/src/reservar.php?suite=Habitaciones%20Estándar" class="boton-reservar">
                    <i class="fas fa-calendar-check"></i> Reservar
                </a>
            </div>
        </div>
        <div class="tarjeta">
            <div class="tarjeta-imagen">
                <img src="./src/images/habitaciones familiares/715deec4a1ec755716463fef83b3d75a.webp" alt="Imagen de la habitación">
            </div>
            <div class="tarjeta-contenido">
                <h2>Habitaciones Familiares </h2>
                <p>Pensadas para quienes viajan en familia, estas habitaciones ofrecen dos camas queen size y un área de estar adicional. Cuentan con todas las comodidades modernas, como aire acondicionado, TV satelital, acceso a Internet de alta velocidad, y baño privado con bañera. Además, disponen de espacio suficiente para acomodar hasta cuatro personas cómodamente.</p>
                <p class="precio">Precio por noche: $140</p>
                <p class="precio">Precio semanal: $900</p>
                <a href="./src/forms/src/reservar.php?suite=Habitaciones%20Familiares" class="boton-reservar">
                    <i class="fas fa-calendar-check"></i> Reservar
                </a>
            </div>
        </div>
        <div class="tarjeta">
            <div class="tarjeta-imagen">
                <img src="./src/images/habitacion deluxe/200g10000000ph6xwD5BF_W_1280_853_R5.webp" alt="Imagen de la habitación">
            </div>
            <div class="tarjeta-contenido">
                <h2>Habitaciones Deluxe </h2>
                <p>Las habitaciones deluxe ofrecen un espacio más amplio y una vista privilegiada, ideal para quienes buscan un poco más de lujo durante su estadía. Estas habitaciones están equipadas con una cama king size, aire acondicionado, TV satelital de pantalla plana, minibar, caja fuerte, y baño privado con ducha de hidromasaje. También incluyen acceso a Internet de alta velocidad y servicio a la habitación las 24 horas.</p>
                <p class="precio">Precio por noche: $170</p>
                <p class="precio">Precio semanal: $1050</p>
                <a href="./src/forms/src/reservar.php?suite=Habitaciones%20Deluxe" class="boton-reservar">
                    <i class="fas fa-calendar-check"></i> Reservar
                </a>
            </div>
        </div>
        <div class="tarjeta">
            <div class="tarjeta-imagen">
                <img src="./src/images/habitaciones suidtes junior/0226b12000b8ugkdk4015_W_1280_853_R5.webp" alt="Imagen de la habitación">
            </div>
            <div class="tarjeta-contenido">
                <h2>Suites Junior</h2>
                <p>Las suites junior ofrecen un equilibrio perfecto entre confort y lujo. Estas habitaciones están diseñadas para aquellos que buscan un espacio más amplio y servicios adicionales. Equipadas con una cama king size, área de estar separada, aire acondicionado, TV satelital, acceso a Internet de alta velocidad, minibar, y baño privado con jacuzzi. También incluyen servicio a la habitación las 24 horas y vistas panorámicas. </p>
                <p class="precio">Precio por noche: $185</p>
                <p class="precio">Precio semanal: $1150</p>
                <a href="./src/forms/src/reservar.php?suite=Suites%20Junior" class="boton-reservar">
                    <i class="fas fa-calendar-check"></i> Reservar
                </a>
            </div>
        </div>
    </div>