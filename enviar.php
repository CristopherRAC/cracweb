<?php
$destino="cristopherarmas23@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["mail"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:gracias.html");
?>