<?php
require_once('conexion.php');

if (isset($_POST['searchTerm'])) {
    $searchTerm = $_POST['searchTerm'];

    $sql = "SELECT * FROM posts WHERE titulo LIKE :searchTerm OR contenido LIKE :searchTerm";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':searchTerm', '%' . $searchTerm . '%');
    $statement->execute();

    echo '<div class="row">';
    while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-md-4">';
        echo '<div class="post">';
        echo '<a href="post.php?id=' . urlencode($fila['id']) . '"><img src="' . $fila['imagen'] . '" class="card-img-top" alt="Imagen del post"></a>';
        echo '<h3>' . htmlspecialchars($fila['titulo']) . '</h3>';
        echo '<p class="card-text">' . substr($fila['contenido'], 0, 200) . ' <strong> [...] Ver más </strong></p>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
