<?php

// Obtener la URL de la API desde la solicitud GET
$url = $_GET['url'];

// Inicializar cURL
$curl = curl_init($url);

// Configurar algunas opciones de cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// Ejecutar la solicitud cURL y almacenar la respuesta en una variable
$response = curl_exec($curl);

// Verificar si hay errores
if(curl_errno($curl)){
    echo 'Error: ' . curl_error($curl);
}

// Cerrar la sesión cURL para liberar recursos
curl_close($curl);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Establecer el encabezado para indicar que se enviará una respuesta JSON
header('Content-Type: application/json');

// Imprimir la respuesta en formato JSON
echo json_encode($data);

?>