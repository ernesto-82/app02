<?php
$mensaje = "";

if (isset($_POST['nombre']) && isset($_POST['anio'])) 
    {
    $nombre = $_POST['nombre'];
    $anio = $_POST['anio'];
    // DATOS ENVIADOS EN POST A LA URL DE PROCESAMIENTO
    $datos = http_build_query(array('nombre' => $nombre, 'anio' => $anio));
    $opciones = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $datos
        )
    );
    $contexto = stream_context_create($opciones);
    $url = "http://localhost:8091/PHP/ej4_procesar.php";
    $mensaje = file_get_contents($url, false, $contexto);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>4. Cálculo de Edad</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../../index.html">Ejercicios IAW</a>
            <a class="nav-link text-white" href="ejercicio01.php">1. Saludo</a>
            <a class="nav-link text-white" href="ejercicio02.php">2. Tabla</a>
            <a class="nav-link text-white" href="ejercicio03.php">3. Vocales</a>
            <a class="nav-link text-white" href="ejercicio04.php">4. Procesar</a>
            <a class="nav-link text-white" href="ejercicio05.php">5. Lista</a>
            <a class="nav-link text-white" href="ejercicio06.php">6. Adivina</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>4. Cálculo de Edad</h1>
        <?php if ($mensaje != "") 
        { ?>
            <div class="alert alert-success">
                <?php echo $mensaje; ?>
            </div>
        <?php } 
        ?>
        <form action="" method="POST">
            <p>
                <label>Tu nombre:</label><br>
                <input type="text" name="nombre" required>
            </p>
            <p>
                <label>Tu año de nacimiento:</label><br>
                <input type="number" name="anio" required>
            </p>
            <button type="submit" class="btn btn-primary">Calcular Edad</button>
        </form>
    </div>
</body>
</html>