<?php
$mensaje = "";

if (isset($_GET['palabra'])) 
    {
    $palabra = $_GET['palabra'];
    $url = "http://localhost:8091/PHP/ej3_vocales.php?palabra=" . urlencode($palabra);
    $mensaje = file_get_contents($url);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>3. Contador de Vocales</title>
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
        <h1>3. Contador de Vocales</h1>
            <?php if ($mensaje != "") 
            { ?>
            <div class="alert alert-success">
                <?php echo $mensaje; ?>
            </div>
        <?php } 
        ?>
        <form action="" method="GET">
            <p>
                <label>Escribe una palabra:</label>
                <input type="text" name="palabra" required>
            </p>
            <button type="submit" class="btn btn-primary">Contar Vocales</button>
        </form>
    </div>
</body>
</html>