<?php
$url_api = "https://api.wasi.co/v1/property/search?id_company=12187774&wasi_token=4S5J_vW2T_ZJ1u_PvKR";

// Inicializar una solicitud cURL
$curl = curl_init();

// Desactivar la validación SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

// Establecer la URL de la solicitud cURL
curl_setopt($curl, CURLOPT_URL, $url_api);

// Establecer la opción para devolver el resultado de la solicitud en lugar de imprimirlo
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Realizar la solicitud cURL y almacenar la respuesta en una variable
$response = curl_exec($curl);

// Verificar si la solicitud fue exitosa
if ($response === false) {
    // Si la solicitud falla, mostrar un mensaje de error
    die("Error al consumir la API.");
}

echo $response;

// Decodificar los datos JSON en un array asociativo de PHP
$data = json_decode($response, true);

// Verificar si la decodificación fue exitosa
if ($data === null) {
    // Si la decodificación falla, mostrar un mensaje de error
    die("Error al decodificar los datos JSON.");
}

// La decodificación del JSON fue exitosa, $data ahora contiene el array de datos de la API
// Ahora puedes usar el array $data según sea necesario

// Ejemplo: imprimir los datos decodificados
print_r($data);

// Cerrar la solicitud cURL
curl_close($curl);
?>