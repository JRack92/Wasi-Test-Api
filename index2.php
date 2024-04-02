<?php
$url_api = "https://api.wasi.co/v1/property/search?id_company=12187774&wasi_token=4S5J_vW2T_ZJ1u_PvKR";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($response);
    print_r($decoded);
    print($decoded);
    echo $decoded;
}
