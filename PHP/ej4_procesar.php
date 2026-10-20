<?php
require_once __DIR__ . '/includes/libreria.php';

if (isset($_POST['nombre']) && isset($_POST['anio'])) 
    {
    $nombre = $_POST['nombre'];
    $anio = $_POST['anio'];
    echo calcularEdad($nombre, $anio);
    } 
else 
    {
    echo "Faltan datos por enviar.";
    }
?>