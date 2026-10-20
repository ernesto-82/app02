<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>5. Lista de la Compra</title>
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
        <h1>5. Lista de la Compra</h1>
        <form id="formularioAnadir" class="mb-4">
            <div class="input-group" style="max-width: 400px;">
                <input type="text" id="producto" class="form-control" placeholder="Ej: Leche" required>
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
        </form>
        <div id="contenedorLista"></div>
        <button id="btnVaciar" class="btn btn-danger mt-3">Vaciar Lista</button>
    </div>
    <script>
        function cargarLista() 
        {
        var peticion = new XMLHttpRequest();
        peticion.open("GET", "../../PHP/ej5_lista.php", true);
            
        peticion.onload = function() 
            {
            document.getElementById("contenedorLista").innerHTML = peticion.responseText;
            };
            peticion.send();
        }
// AÑADIMOS EL EVEBTO SUBMIT AL FORMULARIO \\
        document.getElementById("formularioAnadir").onsubmit = function(evento) 
        {
            evento.preventDefault();
            var producto = document.getElementById("producto").value;
            
            var peticion = new XMLHttpRequest();
            peticion.open("POST", "../../PHP/ej5_lista.php", true);
            peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
            peticion.onload = function() {
                cargarLista();
                document.getElementById("producto").value = "";
            };
            peticion.send("producto=" + encodeURIComponent(producto));
            };
            document.getElementById("btnVaciar").onclick = function() 
            {
            var peticion = new XMLHttpRequest();
            peticion.open("POST", "../../PHP/ej5_lista.php", true);
            peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
            peticion.onload = function() 
            {
            cargarLista();
            };
            peticion.send("vaciar=1");
        };
        cargarLista();
    </script>
</body>
</html>