<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$preguntas = $_POST['preguntas'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "viajes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$sql = "INSERT INTO contactos (nombre, correo, preguntas) VALUES ('$nombre', '$correo', '$preguntas')";

if ($conn->query($sql) === TRUE) {
    $mensaje = "Los datos se han guardado correctamente en la base de datos.";
} else {
    $mensaje = "Error al guardar los datos en la base de datos: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Procesar Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-success">
            <?php echo $mensaje; ?>
            <a href="index.php" class="btn btn-primary">Volver a Inicio</a>
        </div>
    </div>

    <script>
        document.querySelector('.btn-primary').addEventListener('click', function() {
            window.location.href = 'index.php';
        });
    </script>
</body>

</html>