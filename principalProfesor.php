<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/itoIcon.ico">
    <title>Pagina Principal</title>
</head>
<body>

    <header>
        <h1>Control De Docentes</h1>
      </header>
      <nav>
        <a href="califAlumno.php">Capturar Calificaciones</a>
        <a href="listaAlumnos.php">Listas de Alumnos</a>
        <a href="califProfe.php">Dar Alta Calificación</a>
        <a href="php/cerrarSesion.php">Salir</a>
      </nav>
      <div class="container">
      <h2>Bienvenido a la página de Control de Extraescolares</h2>
      <p>¡Gracias por visitarnos! Aquí podrás realizar diversas acciones relacionadas con el control de extraescolares del Instituto Tecnológico de Orizaba.</p>
      </div>
    
</body>
</html>