<?php
// LIBRERIA DE FUNCIONES \\
require_once __DIR__ . '/includes/libreria.php';

if (isset($_GET['nombre'])) 
    {
    $nombre = $_GET['nombre'];
    echo generarSaludo($nombre);
    } 
    else 
        {
        echo "No has enviado ningún nombre.";
        }
?>