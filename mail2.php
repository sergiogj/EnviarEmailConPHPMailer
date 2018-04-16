<?php
$nombre = $_POST['nombre'];
$cif = $_POST['cif'];
$fechaconstitucion = $_POST['fechaconstitucion'];
$domicilio = $_POST['domicilio'];
$localidad = $_POST['localidad'];
$provincia = $_POST['provincia'];
$codigopostal = $_POST['codigopostal'];
$web = $_POST['web'];
$cnae = $_POST['cnae'];
$personacontacto = $_POST['personacontacto'];
$cargopersona = $_POST['cargopersona'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$numerotrabajadores = $_POST['numerotrabajadores'];

echo "<p>Nombre: $nombre</p>";
echo "<p>CIF: $cif</p>";
echo "<p>Fecha de constitución: $fechaconstitucion</p>";
echo "<p>Domicilio: $domicilio</p>";
echo "<p>Localidad: $localidad</p>";
echo "<p>Provincia: $provincia</p>";
echo "<p>Código Postal: $codigopostal</p>";
echo "<p>Web: $web</p>";
echo "<p>$Sector de actividad (CNAE): cnae</p>";
echo "<p>Persona de contacto: $personacontacto</p>";
echo "<p>Cargo de la persona de contacto: $cargopersona</p>";
echo "<p>Email: $email</p>";
echo "<p>Teléfono: $telefono</p>";
echo "<p>Número de trabajadores: $numerotrabajadores</p>";
?>