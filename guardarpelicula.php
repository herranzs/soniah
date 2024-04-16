<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Nueva Película</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
<h1>Nueva Película</h1>
    <form action="insertarpelicula.php" id="film" method="post">
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
        </div>
        <div>
            <label for="director">Director:</label>
            <input type="text" id="director" name="director" required>
        </div>
        <div>
            <label for="actor">Actor Principal:</label>
            <input type="text" id="actor" name="actor" required>
        </div>
        <div>
            <label for="genero">Género:</label>
            <input type="text" id="genero" name="genero" required>
        </div>
        <div>
            <label for="duracion">Duración (min):</label>
            <input type="number" id="duracion" name="duracion" required>
        </div>

        <div>
            <label for="stock">Disponibilidad
            <select id="stock" name="stock">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
            </label>
        </div>
        <input type="submit" name="guardar" value="Guardar pelicula"></input>
        
    </form>
    <button class="botonActualizar">Actualizar Películas</button>
   

</body>
</html>
