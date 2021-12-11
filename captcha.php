<?php
//crear una imagen

include("config.php");
$imagen = imagecreate(100,35);

//color de fondo
$fondo = imagecolorallocate($imagen,42,42,54);
$texto = imagecolorallocate($imagen,255,240,240);


//creamos valor aleatorio
$random = rand(100000,999999);

$sql = "UPDATE `llaves` SET `captcha` = '$random' WHERE `llaves`.`Id` = 1; ";

$result = $mysqli->query($sql);

//RELLENAR LA IMAGEN
ImageFill($imagen, 50,0,$fondo);
//IMPRIMIR TEXTO EN LA IMAGEN
imagestring($imagen, 70,23,10,$random, $texto);

header('Content-type: image/png');

imagepng($imagen);

// sqli_close();
?>