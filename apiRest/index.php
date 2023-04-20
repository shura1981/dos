<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
date_default_timezone_set('America/Bogota');
try {
    require('../funciones.php');
    $multiplicador = $_GET['multiplicador'];
    $limite = $_GET['limite'];
    $multiplos = calcularMultiplos($multiplicador, $limite);

} catch (Exception $e) {
    $result = array('status' => 'false', 'message' => 'Ocurrió un error: ' . $e->getMessage());
}


header("Content-type: application/json; charset=utf-8");
echo json_encode($multiplos, JSON_NUMERIC_CHECK);