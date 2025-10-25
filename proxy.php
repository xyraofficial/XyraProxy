<?php
header('Content-Type: application/json');

// Ambil input JSON dari client
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Jika client tidak kirim "contents", buat default
if (!isset($data['contents'])) {
    $data = [
        "contents" => [
            [
                "parts" => [
                    ["text" => "Hello from PHP proxy!"]
                ]
            ]
        ]
    ];
}

$ch = curl_init('https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=AIzaSyDD4f1A2OJhGUoW_sLmz0LvUD9BIqW73ww');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)]);
} else {
    echo $response;
}
curl_close($ch);
