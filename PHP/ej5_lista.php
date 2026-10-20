<?php
require_once __DIR__ . '/includes/libreria.php';
session_start();

if (isset($_POST['producto']) && !empty($_POST['producto'])) 
    {
    if (!isset($_SESSION['lista'])) 
        {
        $_SESSION['lista'] = [];
        }
    $_SESSION['lista'] = anadirProducto($_SESSION['lista'], $_POST['producto']);
    }
if (isset($_POST['vaciar'])) 
    {
    $_SESSION['lista'] = vaciarLista();
    }
if (isset($_SESSION['lista']) && count($_SESSION['lista']) > 0) 
    {
    echo "<h3>Productos pendientes:</h3>";
    echo "<ul>";
    foreach ($_SESSION['lista'] as $item) 
        {
        echo "<li>" . $item . "</li>";
        }
    echo "</ul>";
    } 
    else 
        {
        echo "<p>Tu lista está vacía. ¡Añade algo!</p>";
        }
?>