<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Empresa</title>
    <link rel="stylesheet" href="estilospaginaweb.css">
</head>

<body>
    <!-- Barra de Navegación -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <div class="header-content">
            <h1>Bienvenidos a Nuestra Empresa de Internet por Fibra Optica</h1>
            <p>Tu solución en servicios y productos innovadores.</p>
            <a href="#servicios" class="btn">Descubre más</a>
        </div>
        <img src="imagen1.jpg" alt="Imagen de encabezado">
    </header>

    <!-- Sección de Servicios -->
    <section id="servicios">
        <h2>Servicios</h2>
        <div class="service-cards">
            <div class="card">
                <img src="imagen5.jpg" alt="Icono 1">
                <h3>50 MBPS</h3>
                <p>El plan de 50 Mbps es ideal para hogares pequeños con un uso moderado de Internet. Es perfecto para navegar por la web, transmitir videos en calidad HD y realizar videollamadas sin interrupciones. Puede soportar fácilmente a 2 o 3 usuarios conectados al mismo tiempo.</p>
            </div>
            <div class="card">
                <img src="imagen4.jpg" alt="Icono 2">
                <h3>100 MBPS</h3>
                <p>El plan de 100 Mbps ofrece una velocidad rápida para familias medianas o personas que realizan actividades en línea intensivas, como juegos en línea, streaming en Full HD o 4K, y descargas de archivos grandes. Es una excelente opción para quienes necesitan conexiones estables y rápidas para varios dispositivos simultáneamente.</p>
            </div>
            <div class="card">
                <img src="imagen3.jpg" alt="Icono 3">
                <h3>500 MBPS</h3>
                <p>El plan de 500 Mbps es ideal para hogares grandes o usuarios que requieren un rendimiento ultrarrápido. Esta velocidad es perfecta para transmisiones en 4K, descargas masivas, juegos en línea sin latencia y videoconferencias de alta calidad. Permite conectar múltiples dispositivos al mismo tiempo sin ninguna ralentización perceptible.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Productos -->
    <section id="productos">
        <h2>Productos</h2>
        <p>Conoce nuestros productos más destacados.</p>
        <a href="https://www.netlife.ec" class="btn">Ver Productos</a>
    </section>

    <!-- Sección de Nosotros -->
    <section id="nosotros">
        <h2>Nosotros</h2>
        <p>En FibraNet, somos una empresa líder en el sector de telecomunicaciones especializada en brindar soluciones de Internet de alta velocidad a través de fibra óptica. Con más de una década de experiencia, nos comprometemos a conectar hogares y empresas con la mejor tecnología para garantizar una experiencia de navegación fluida, segura y confiable. Nuestra misión es ofrecer un servicio de calidad que permita a nuestros clientes disfrutar del máximo rendimiento en la era digital, apoyando tanto sus necesidades personales como profesionales. Innovamos cada día para ser el puente que conecta el futuro de la conectividad.</p>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto">
        <h2>Contacto</h2>
        <p>Contáctanos en el número: 0969213102</p>
        <a href="mailto:info@empresa.com" class="btn">Envíanos un correo</a>
        <div id="map"></div> <!-- Mapa que será generado con JavaScript -->
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.3466870411363!2d-122.08424948451218!3d37.42206597982748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5e69f5a3b13%3A0xe8b6d93a1737e69e!2sGoogleplex!5e0!3m2!1ses!2sus!4v1514524640485"
            width="200"
            height="250"
            style="border:10;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    </section>

    <footer>
        <p>Síguenos en nuestras redes sociales</p>
        <a href="https://www.facebook.com/?locale=es_LA">Facebook</a> | <a href="https://x.com/home?lang=es">Twitter</a> | <a href="https://www.instagram.com">Instagram</a>
    </footer>

    <script src="js/scripts.js"></script>
</body>

</html>