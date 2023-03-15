<?php
session_start();

// Generar un número aleatorio de 4 dígitos
$num = rand(1000, 9999);

// Almacenar el número generado en una variable de sesión
$_SESSION["captcha"] = $num;

// Crear una imagen con el número generado
$imagen = imagecreatetruecolor(120, 30);
$fondo = imagecolorallocate($imagen, 255, 255, 255);
$texto = imagecolorallocate($imagen, 0, 0, 0);
imagefilledrectangle($imagen, 0, 0, 120, 30, $fondo);
imagettftext($imagen, 20, 0, 10, 25, $texto, "arial.ttf", $num);

// Enviar encabezados para que el navegador reconozca la imagen como imagen
header("Content-type: image/png");
header("Cache-Control: no-cache, must-revalidate");

// Generar la imagen y enviarla al navegador
imagepng($imagen);

// Liberar memoria
imagedestroy($imagen);
?>


