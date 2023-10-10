<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importancia de la salud mental</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Agrega los estilos del carrusel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Personaliza el estilo del contenedor del título y el video */
        .center-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <?php include("navbar.php"); ?>

    <div class="container">
        <!-- Contenedor centrado para el título y el video -->
        <div class="center-container">
            <h1>Importancia de la salud mental</h1>
            
            <!-- Carrusel de imágenes -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Imágenes del carrusel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="multimedia/image1.jpg" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="multimedia/image2.jpg" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="multimedia/image3.jpg" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                    <img src="multimedia/image4.jpg" alt="Imagen 4">
                </div>
            </div>

            <!-- Controles de navegación -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br>

            <!-- Texto sobre la importancia de la salud mental -->
            <p>La salud mental es un componente fundamental de nuestro bienestar general y calidad de vida. Según la Organización Mundial de la Salud (OMS), la salud mental es un estado de bienestar en el cual la persona es consciente de sus propias capacidades, puede afrontar las tensiones normales de la vida, puede trabajar de manera productiva y fructífera, y es capaz de hacer una contribución a su comunidad.</p>

            <p>La OMS también destaca que la salud mental es esencial en todas las etapas de la vida, desde la infancia y la adolescencia hasta la edad adulta y la vejez. Mantener una buena salud mental nos permite enfrentar los desafíos cotidianos, tomar decisiones informadas, establecer relaciones positivas y disfrutar de una vida plena y significativa.</p>

            <p>Desafortunadamente, los trastornos mentales y emocionales son comunes en todo el mundo, y su impacto en la salud y el bienestar de las personas es significativo. Sin embargo, con la atención adecuada a la salud mental, el apoyo de la comunidad y el acceso a servicios de salud mental de calidad, muchas personas pueden recuperarse y llevar vidas productivas y felices.</p>

            <p>Es fundamental comprender que la salud mental no solo se trata de la ausencia de trastornos mentales, sino de promover un estado de bienestar emocional y psicológico. Esto implica cuidar nuestras emociones, gestionar el estrés, buscar apoyo cuando sea necesario y fomentar la resiliencia para enfrentar los desafíos de la vida.</p>

            <p>La promoción de la salud mental se basa en la conciencia, la educación y la eliminación del estigma asociado a los problemas de salud mental. Cuando las comunidades y las sociedades comprenden la importancia de la salud mental, pueden crear entornos que fomenten la aceptación, el apoyo y el acceso a recursos que promuevan el bienestar emocional de todos sus miembros.</p>

            <p>En resumen, la salud mental es un activo valioso que merece nuestra atención y cuidado. Al reconocer su importancia, podemos trabajar juntos para construir sociedades más saludables y felices para todos.</p>


        <!-- Video de YouTube -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2vbS__04OmY?si=45NPcsjlb5R8MKTR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Footer -->
    <?php include("footer.php"); ?>

    <!-- Agrega los scripts del carrusel -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
