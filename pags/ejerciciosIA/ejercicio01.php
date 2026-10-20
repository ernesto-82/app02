<?php
$mensaje = "";

if (isset($_GET['nombre'])) 
    {
    $url = "http://localhost:8091/PHP/ej1_saludo.php?nombre=" . urlencode($_GET['nombre']);
    $mensaje = file_get_contents($url);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>1. Saludo Personalizado</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="nav-link text-white" href="ejercicio01.php">1. Saludo</a>
            <a class="nav-link text-white" href="ejercicio02.php">2. Tabla</a>
            <a class="nav-link text-white" href="ejercicio03.php">3. Vocales</a>
            <a class="nav-link text-white" href="ejercicio04.php">4. Procesar</a>
            <a class="nav-link text-white" href="ejercicio05.php">5. Lista</a>
            <a class="nav-link text-white" href="ejercicio06.php">6. Adivina</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>1. Saludo Personalizado</h1>
        <?php if ($mensaje != "") 
            { ?>
            <div class="alert alert-success">
                <?php echo $mensaje; ?>
            </div>
        <?php }
         ?>
        <form action="" method="GET">
            <p>
                <label>Tu nombre:</label>
                <input type="text" name="nombre" required>
            </p>
            <button type="submit" class="btn btn-primary">Enviar Saludo</button>
        </form>
    </div>
</body>
</html>