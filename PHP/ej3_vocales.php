<?php
require_once __DIR__ . '/includes/libreria.php';

if (isset($_GET['palabra'])) 
    {
    echo contarVocales($_GET['palabra']);
    } 
    else 
        {
        echo "No has enviado ninguna palabra.";
        }
?>