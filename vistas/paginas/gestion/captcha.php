<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-type: image/jpeg");

$codigo_captcha = isset($_GET['codigo']) ? $_GET['codigo'] : 'Error';

$imagen_captcha = imagecreate(70, 30);
$fondo = imagecolorallocate($imagen_captcha, 148, 234, 182);
$texto = imagecolorallocate($imagen_captcha, 82, 4, 34);

imagestring($imagen_captcha, 5, 15, 5, $codigo_captcha, $texto);
imagejpeg($imagen_captcha);
imagedestroy($imagen_captcha);  // Liberar memoria
?>
