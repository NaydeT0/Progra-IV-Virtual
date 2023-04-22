<?php
$nombre = $_post['textnombre'];
$direccion = $_post['textdireccion'];
$edad = $_post['textedad'];

if($edad<=2){
    $msg='Eres un bebe';
}
else if($edad<=11){
    $msg='Eres un nino';
}
else if($edad<=17){
    $msg='Eres un adolescente';
}
else if($edad<=65){
    $msg='Eres un adulto, tienes responsabilidades';
}
else if($edad<=65){
    $msg='Larga vida';
}else {
    $msg='Error en la edad';
}
