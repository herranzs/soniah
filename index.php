<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>VIDEOCLUB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
    <div class="container">
        <h1><i></i>VIDEOCLUB</i></h1>
        <form action="guardarpelicula.php" method="post">
            <input type="submit" name="nuevo" value="Nueva Pelicula"></input>
        </form>

        <div class="pelicula">
            <?php
                require_once "conexion.php";
                
                $sql = "SELECT * FROM peliculas";
                $resultados = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

                print("<h2>Listado de Películas</h2>");

                while ($fila = mysqli_fetch_array($resultados)) {
                    $stock = $fila['stock'] ? "SI" : "NO";


                    echo "<div>";
                    echo "<br><strong>Titulo: </strong>" . $fila['titulo'] . "<br>";
                    echo "<strong>Director: </strong>" . $fila['director'] . "<br>";
                    echo "<strong>Actor Principal: </strong>" . $fila['actor'] . "<br>";
                    echo "<strong>Género: </strong>" . $fila['genero'] . "<br>";
                    echo "<strong>Duración: </strong>" . $fila['duracion'] . "<br>";
                    

                    echo "<strong>Disponibilidad: </strong>" . $stock;
                    echo "<div><a href='update.php?id=" . $fila['id'] . "'><button class='botonNoStock'>No disponible</button></a></div>";
                    echo "<div><a href='update1.php?id=" . $fila['id'] . "'><button class='botonStock'>Disponible</button></a></div>";
                    echo "<a href='actualizar.php?id=" . $fila['id'] . "' onclick='return confirm(\"Pelicula actualizada\")'><button class='botonNoStock'>Actualizar</button></a><br>";
                    

                    // echo "<div><a href='actualizar.php?id=" . $fila['id'] . "'><button class='botonNoStock'>Actualizar</button></a></div><br>";

                   
                    echo "<a href='delete.php?id=" . $fila['id'] . "' onclick='return confirm(\"¿Deseas eliminar esta pelicula?\")'><button class='botonEliminar'>Eliminar</button></a>";
                   
                }


            ?>
        </div>
    </div>
</body>
</html>
