<?php

require_once('conexion.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM posts WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($post) {
        $fecha = date('d \d\e F Y', strtotime($post['fecha_creacion']));
?>

        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>A volar! Viajes y Experiencias</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <link rel="stylesheet" href="../A VOLAR/CSS/estilos.css">
        </head>

        <body>
            <header>
            <nav class="navbar navbar-expand-lg navbar-light bg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="../A VOLAR/img/5.png" alt="A volar!" width="200"></a></a>
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
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
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
            </header>
          

            <main>
                <!-- Contenido del artículo -->
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-8 mx-auto ">
                            <h1 class="fw-bold text-center"><?php echo $post['titulo']; ?></h1>
                            <img src="<?php echo $post['imagen']; ?>" alt="Imagen del post" class="img-fluid my-4 mx-auto d-block">
                            <?php
                            $contenido = $post['contenido'];
                            $parrafos = explode("\n", $contenido);
                            foreach ($parrafos as $parrafo) {
                                echo '<p class="my-4 blockquote">' . $parrafo . '</p>';
                            }
                            ?>

                            <div class="meta">
                                <span class="fecha"><?php echo $fecha; ?></span>
                                <span class="autor"><i class="bi bi-person"></i> <?php echo $post['autor']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>


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

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                <script src="main.js"></script>
        </body>

        </html>

<?php
    } else {
        echo 'No se encontró el artículo.';
    }
} else {
    echo 'ID inválido.';
}
?>