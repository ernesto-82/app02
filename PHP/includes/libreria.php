<?php

// FUNCION SALUDO \\
function generarSaludo($nombre) 
{
    if ($nombre != "") 
        {
        return "Hola " . $nombre . ", gracias por venir.";
        } 
        else 
            {
            return "¿No te presentas? Bienvenido igualmente, desconocido.";
            }
}
// FUNCION TABLA DE MULTIPLICAR \\
function generarTabla($numero) 
{
    $resultado = "";
    for ($i = 1; $i <= 10; $i++) 
        {
        $multiplicacion = $numero * $i;
        $resultado = $resultado . $numero . " x " . $i . " = " . $multiplicacion . "<br>";
        }
    return $resultado;
}
// CONTADOR DE VOCALES \\
function contarVocales($palabra) 
{
    $totalVocales = 0;
    $contA = 0;
    $contE = 0;
    $contI = 0;
    $contO = 0;
    $contU = 0;
    
    for ($i = 0; $i < strlen($palabra); $i++) 
    {
        $letra = $palabra[$i];
        
        if ($letra == "a") 
            {
            $contA++;
            $totalVocales++;
            } 
            elseif ($letra == "e") 
                {
                $contE++;
                $totalVocales++;
                } 
                elseif ($letra == "i") 
                    {
                    $contI++;
                    $totalVocales++;
                    } 
                    elseif ($letra == "o") 
                        {
                        $contO++;
                        $totalVocales++;
                        } 
                        elseif ($letra == "u") 
                            {
                            $contU++;
                            $totalVocales++;
                            }
    }
    $resultado = "La palabra \"" . $palabra . "\" tiene " . $totalVocales . " vocales.<br>";
    $resultado = $resultado . "a: " . $contA . "<br>";
    $resultado = $resultado . "e: " . $contE . "<br>";
    $resultado = $resultado . "i: " . $contI . "<br>";
    $resultado = $resultado . "o: " . $contO . "<br>";
    $resultado = $resultado . "u: " . $contU;
    
    return $resultado;
}
// PROCESAR EDAD \\
function calcularEdad($nombre, $anioNacimiento) 
{
    $anioActual = date("Y");
    $edad = $anioActual - $anioNacimiento;
    return "Hola " . $nombre . ", tienes " . $edad . " años.";
}
// LISTA DE LA COMPRA \\
function anadirProducto($lista, $producto) 
{
    $lista[] = $producto;
    return $lista;
}
// FUNCION VACIAR LA LISTA \\
function vaciarLista() 
{
    return [];
}
// ADIVINAR NUEMRO \\
function comprobarIntento($intento, $numeroSecreto) 
{
    if ($intento == $numeroSecreto) 
        {
        return "¡ACERTASTE! El número era el " . $numeroSecreto;
        } 
        elseif ($intento < $numeroSecreto) 
            {
            return "El número que buscas es MÁS ALTO.";
            } 
            else 
                {
                return "El número que buscas es MÁS BAJO.";
                }
}