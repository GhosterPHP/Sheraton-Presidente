<header>
    <!-- <img src="./src/videos/bg.webp" id="videobg"> -->
     <video src="./src/videos/bg.mp4"id="videobg" autoplay loop muted></video>
    <div logo>
        <span icon></span>
        <div class="Titulo">
            <p>Paraíso</p>
            <p class="tiny">del</p>
            <p>Pacifico</p>
        </div>
    </div>
    <p Bienvenida>¡Tu mejor opcion!</p>
    <nav>
        <ul>
            <li onclick="firstload()"><a href="#"><i class="bi bi-house-fill"></i> Inicio</a></li>
            <li><a href="./components/middle/nosotros.php"><i class="bi bi-people-fill"></i> Sobre Nosotros</a></li>
            <li>
                <a href="#habitaciones" drop>
                    <i class="fas fa-bed" style="margin-right: 8px;"></i> Suites
                    <span style="color: white;">&#9660;</span>
                </a>
                <ul class="dropdown">
                    <li><a href="./components/middle/suiteneptuno.php">🦑 Suite Neptuno</a></li>
                    <li><a href="./components/middle/suiteatlantis.php">🌊 Suite Atlantis</a></li>
                    <li id="poseidon"><a href="#habitacion3">🔱 Suite Poseidón</a></li>
                </ul>
            </li>
            <li><a href="./components/middle/restaurant.php"><i class="fas fa-utensils"></i> Restaurant</a></li>
            <li><a href="./src/forms/src/reservar.php"><i class="fas fa-key"></i> Reservaciones</a></li>
        </ul>
    </nav>
    <span scrollindicador onclick="toggleStickyHeader()"></span>
</header>
<script src="./src/js/header.js"></script>