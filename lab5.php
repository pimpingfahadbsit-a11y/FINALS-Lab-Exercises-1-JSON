<?php

header('Content-Type: application/json');

$json = file_get_contents('php://input');

$data = json_decode($json);

$response = [
    "status" => "success",
    "message" => "Welcome, " . $data->name . "!"
];

echo json_encode($response);

?>
