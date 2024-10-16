<!DOCTYPE html>
<html lang="es">
    <?php
    $ruta = ".";
    $titulo = "Tienda Tech Zone";
    include "paginas/includes/cabecera.php";
    ?>
    <head>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <?php 
        include "paginas/includes/menu.php";
        ?>
        <div class="container mt-3">
            <header>
                <h1><i class="fas fa-university"></i><?=$titulo?></h1>
                <hr/>
            </header>

            <section>
                <article>
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="max-width: 75%; margin: 0 auto;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/imagen1.jpg" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Imagen 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Primera Diapositiva</h5>
                                    <p>Texto descriptivo para la primera imagen.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/imagen2.png" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Imagen 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Segunda Diapositiva</h5>
                                    <p>Texto descriptivo para la segunda imagen.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/imagen3.jpg" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Imagen 3">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Tercera Diapositiva</h5>
                                    <p>Texto descriptivo para la tercera imagen.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/imagen4.png" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Imagen 4">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Cuarta Diapositiva</h5>
                                    <p>Texto descriptivo para la tercera imagen.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/imagen5.jpeg" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Imagen 5">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Quinta Diapositiva</h5>
                                    <p>Texto descriptivo para la tercera imagen.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </article>
            </section>
        </div>
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>