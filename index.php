<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paraiso del Pacifico</title>
    <link rel="shortcut icon" href="./src/icons/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script>
        document.addEventListener("load", function() {
            window.scrollTo(0, 0);
        });
    </script>
    <style>
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
</head>

<body>
    <?php
    require_once './components/top/header.php';
    ?>
    <main>
        <?php
        require_once './components/middle/slider.php';
        ?>
        <br><br><br> <br><br><br>
        <h2>Habitaciones</h2>
        <?php
        require_once './components/middle/rooms.php';
        ?>
        <br><br><br>
        <?php
        require_once './components/middle/biblioteca.php';
        ?>
        <br><br><br>
        <?php
        require_once './components/middle/green.php';
        ?>
        <br><br><br>
        <?php 
        require_once './components/middle/gym.php';
        ?>
            <br><br><br>    <br><br><br>    <br><br><br>
        <footer class="footer">
            <div class="contenedorr">
                <div class="footer-logo">
                    Hotel Paraíso del Pacífico
                </div>
                <div class="footer-copy">
                    &copy; 2024 Hotel Paraíso del Pacífico. Todos los derechos reservados.
                </div>
                <div class="contact-container">
                    <div class="contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <span>Calle A Playitas 2.8 Km, Carretera Panamericana, La Union CP 3101</span>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-envelope"></i>
                        <span>paraisodelpacificosv@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-telephone"></i>
                        <span>(+503) 7623-5212</span>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="./src/js/bootstrap.bundle.min.js" defer></script>
    <script src="./src/js/slider.js" defer></script>
</body>

</html>