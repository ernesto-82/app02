<?php
require_once __DIR__ . '/includes/libreria.php';

session_start();
// INICIA EL JEGO
if (!isset($_SESSION['numero_secreto']) || isset($_POST['reiniciar'])) {
    $_SESSION['numero_secreto'] = rand(1, 10);
    $_SESSION['intentos'] = 0;
    echo "He pensado un número del 1 al 10. ¡Adivínalo!";
    exit;
    }
// CADA INTENTO SE PROCESA
if (isset($_POST['intento']) && !empty($_POST['intento'])) 
    {
    $intento = $_POST['intento'];
    $numeroSecreto = $_SESSION['numero_secreto'];
    $_SESSION['intentos']++;
    $resultado = comprobarIntento($intento, $numeroSecreto);
    if ($intento == $numeroSecreto) 
        {
        echo $resultado . "<br>Lo has conseguido en " . $_SESSION['intentos'] . " intentos.";
        unset($_SESSION['numero_secreto']); // BORRAMOS LA SESION DEL NUMERO SECRETO PARA VOLVER A INICIAR
        } 
        else 
            {
            echo $resultado . " (Intento nº " . $_SESSION['intentos'] . ")";
            }
    }
?>