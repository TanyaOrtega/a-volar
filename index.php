<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A volar! Viajes y Experiencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../A VOLAR/CSS/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #resultado-container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand" href="#"><img src="../A VOLAR/img/5.png" alt="A volar!" width="200"></a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Viajes Grupales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tips de Viaje</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Destinos
                        </a>
                        <ul class="dropdown-menu" style="background-color:#b8e0ec;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../A VOLAR/destinos.php">América</a></li>
                            <li><a class="dropdown-item" href="../A VOLAR/destinos.php">Europa</a></li>
                            <li><a class="dropdown-item" href="../A VOLAR/destinos.php">Asia</a></li>
                            <li><a class="dropdown-item" href="../A VOLAR/destinos.php">Africa</a></li>
                            <li><a class="dropdown-item" href="../A VOLAR/destinos.php">Oceania</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">FAQ</a>
                    </li>
                </ul>
                <form class="d-flex" id="search-form" role="search">
                    <input class="form-control me-2" id="search-input" type="search" placeholder="Buscar..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <hr class="text-black-50">

                <!--redes sociales-->
                <ul class="navbar-nav flex-row flex-wrap text-black">
                    <li class="nav-item col-6 col-md-auto p-3">
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="bi bi-instagram" style="font-size: 1.5rem; color: rgb(227, 8, 191);"></i>
                            <small class="d-md-none ms-2 social-link">Instagram</small> </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto p-3">
                        <a href="https://www.tiktok.com/" target="_blank">
                            <i class="bi bi-tiktok" style="font-size: 1.5rem; color: rgb(8, 22, 49);"></i>
                            <small class="d-md-none ms-2 social-link">Tiktok</small></a>
                    </li>
                    <li class="nav-item col-6 col-md-auto p-3">
                        <a href="https://www.youtube.com/" target="_blank">
                            <i class="bi bi-youtube" style="font-size: 1.5rem; color: rgb(193, 4, 36);"></i>
                            <small class="d-md-none ms-2 social-link">YouTube</small></a>
                    </li>
                    <li class="nav-item col-6 col-md-auto p-3">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="bi bi-facebook" style="font-size: 1.5rem; color: rgb(85, 140, 242);"></i>
                            <small class="d-md-none ms-2 social-link">Facebook</small></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="resultado-container"></div>
    <div class="my-4"></div>

    <!--slider-->

    <div class="mx-auto" id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="img/Amsterdam.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5 style="font-size: 1.5rem;">Amsterdam</h5>
                    <p style="font-size: 1.5rem;">Asómbrate con "La Venecia del Norte" Los bellos canales de la ciudad.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/Bruselas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 1.5rem;">Bruselas</h5>
                    <p style="font-size: 1.5rem;">Arquitectura memorable, pueblos medievales y comics!</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/Paris.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 1.5rem;">París</h5>
                    <p style="font-size: 1.5rem;">La ciudad del amor y de las luces, un imperdible en una visita a Europa.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/Praga.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 1.5rem;">Praga</h5>
                    <p style="font-size: 1.5rem;">Prepárate para encantarte con sus puentes y centro histórico Patrimonio de la Humanidad</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/Viena.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 1.5rem;">Viena</h5>
                    <p style="font-size: 1.5rem;">Palacios imperiales, museos maravillos y postres delicios!</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/Budapest.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 1.5rem;">Budapest</h5>
                    <p style="font-size: 1.5rem;">Cultura vibrante e historia mezcladas para llevarte a otras épocas.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/Roma.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 1.5rem;">Roma</h5>
                    <p style="font-size: 1.5rem;">La ciudad que tiene todos lo elementos para una visita inolvidable.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- Frase motivadora y formulario de informes -->

    <div class="container my-5">
        <h1 class="fw-bold text-center my-4">¿Estás list@ para la aventura?</h1>
        <p class="blockquote">Si tus amigos/familia no tienen tiempo para irse de viaje contigo, te da miedo viajar sol@ o quieres vivir una aventura diferente, estás en el lugar correcto, nosotros tenemos el plan armado, tu sólo preocúpate por alcanzarnos en el destino indicado, actualmente tenemos el Eurotrip de Otoño en puerta, vente de aventura con nosotros! </p>

        <a href="#" class="btn btn-primary my-5" id="informesBtn">Solicitar informes</a>
    </div>

    <div class="container my-5" id="formularioContainer" style="display: none;">
        <h2>Solicitar información</h2>
        <form action="procesar_formulario.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="preguntas" class="form-label">Preguntas sobre el paquete de interés o cualquier duda:</label>
                <textarea class="form-control" id="preguntas" name="preguntas" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script>
        document.getElementById("informesBtn").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("formularioContainer").style.display = "block";
        });
    </script>


    <?php
    require_once('conexion.php');

    $sql = "SELECT * FROM posts";
    $resultado = $pdo->query($sql);
    echo '<div class="container">';
    echo '<div class="row">';

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-md-6 post">'; 

        echo '<div class="card mb-4">';
        echo '<a href="post.php?id=' . urlencode($fila['id']) . '"><img src="' . $fila['imagen'] . '" class="card-img-top" alt="Imagen del post"></a>';
        echo '<div class="card-body">';
        echo '<h2 class="card-title">' . $fila['titulo'] . '</h2>';
        echo '<p class="card-text lead">' . substr($fila['contenido'], 0, 200) . ' <strong> [...]    Ver más </strong></p>';
        echo '</div>';
        echo '<div class="card-footer">';
        $fecha = date('d \d\e F Y ', strtotime($fila['fecha_creacion']));
        echo '<span class="fecha">' . $fecha . '</span>';
        echo '<span class="autor"><i class="bi bi-person"></i> ' . $fila['autor'] . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>'; 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="main.js"></script>


    <div class="row mt-5">
        <footer class="footer bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Tanya Guadalupe Ortega Toscano</h4>
                        <p>Correo electrónico: tanya.ortega@udgvirtual.udg.mx</p>
                        <p>Teléfono: 3324866049</p>
                    </div>
                    <div class="col-md-6">
                        <h4>Enlaces adicionales</h4>
                        <ul>
                            <li style="text-decoration: none;"><a href="#">Términos y condiciones</a></li>
                            <li style="text-decoration: none;"><a href="#">Política de privacidad</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram" style="font-size: 1.5rem; color: rgb(227, 8, 191);"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.tiktok.com/" target="_blank"><i class="bi bi-tiktok" style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com/" target="_blank"><i class="bi bi-youtube" style="font-size: 1.5rem; color: rgb(193, 4, 36);"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook" style="font-size: 1.5rem; color: rgb(85, 140, 242);"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>