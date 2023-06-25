<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $identificacion = $_POST["identificacion"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $instagram = $_POST["instagram"];
    $comentarios = $_POST["comentarios"];

    echo "<h1>Información del formulario</h1>";
    echo "<p><strong>Nombre Completo:</strong> " . $nombre . "</p>";
    echo "<p><strong>Número de Identificación:</strong> " . $identificacion . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> " . $fecha_nacimiento . "</p>";
    echo "<p><strong>Usuario de Instagram:</strong> " . $instagram . "</p>";
    echo "<p><strong>Comentarios:</strong> " . $comentarios . "</p>";
}
?>
