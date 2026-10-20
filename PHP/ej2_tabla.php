<?php
require_once __DIR__ . '/includes/libreria.php';

if (isset($_GET['numero'])) 
    {
    echo generarTabla($_GET['numero']);
    } 
    else 
        {
        echo "No has enviado ningún número.";
        }
?>