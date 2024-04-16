<?php
require_once 'conexion.php';

if (isset($_POST['guardar'])){
    $titulo = $_POST['titulo'];
    $director = $_POST['director'];    
    $actor = $_POST['actor'];
    $genero = $_POST['genero'];
    $duracion = $_POST['duracion'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO peliculas (titulo, director, actor, genero, duracion, stock) VALUES ('$titulo','$director', '$actor', '$genero', '$duracion', '$stock')";

    if (mysqli_query($conexion, $sql)){
        echo "Pelicula almacenada correctamente";
    } else {
        echo "Error al almacenar la película: " . mysqli_error($conexion);
    }
} 

// else {
//     echo "Error: No se recibió el formulario correctamente.";
// }

echo "<script>location.href='index.php'</script>";
?>