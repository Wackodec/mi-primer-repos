<?php 
// EL INDEX: En l mostraremos la salida de las vistas al usuario y también a través de él enviaremos las distintas acciones que el usuario envíe al controlador

//requiere() establece que el código del archivo es requerido, es decir, obligatorio para el funcionamiento del programa
require_once "controladores/plantilla.controlador.php";

$plantilla = new controladorPlantilla();
$plantilla -> ctrTraerPlantilla();

?>