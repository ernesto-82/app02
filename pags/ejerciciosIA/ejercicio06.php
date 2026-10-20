<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>6. Adivina el Número</title>
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
        <h1>6. Adivina el Número</h1>
        <div id="mensaje" class="alert alert-info mt-3"></div>
        <form id="formularioJuego" style="max-width: 300px; display: none;">
            <div class="input-group">
                <input type="number" id="intento" class="form-control" min="1" max="10" placeholder="Del 1 al 10" required>
                <button type="submit" class="btn btn-primary">Probar</button>
            </div>
        </form>
        <button id="btnReiniciar" class="btn btn-secondary mt-3" style="display: none;">Jugar de nuevo</button>
    </div>
    <script>
        var cajaMensaje = document.getElementById("mensaje");
        var formJuego = document.getElementById("formularioJuego");
        var btnReiniciar = document.getElementById("btnReiniciar");
        // FUNCIÓN PARA INICIAR EL JUEGO \\
        function iniciarJuego() {
            var peticion = new XMLHttpRequest();
            peticion.open("POST", "../../PHP/ej6_adivina.php", true);
            peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
            peticion.onload = function() {
                cajaMensaje.innerHTML = peticion.responseText;
                formJuego.style.display = "block";
                btnReiniciar.style.display = "none";
                document.getElementById("intento").value = "";
            };
            peticion.send("reiniciar=1");
        }
        // EVENTO POR INTENTO
        formJuego.onsubmit = function(evento) 
        {
            evento.preventDefault();
            var intento = document.getElementById("intento").value;
            var peticion = new XMLHttpRequest();
            peticion.open("POST", "../../PHP/ej6_adivina.php", true);
            peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
            peticion.onload = function() 
            {
                cajaMensaje.innerHTML = peticion.responseText;
                if (peticion.responseText.indexOf("ACERTASTE") !== -1) 
                    {
                    formJuego.style.display = "none";
                    btnReiniciar.style.display = "block";
                    }
                document.getElementById("intento").value = "";
            };
            peticion.send("intento=" + intento);
        };
        // EVENTO PARA REINICIAR
        btnReiniciar.onclick = function() 
        {
        iniciarJuego();
        };
        iniciarJuego();
    </script>
</body>
</html>