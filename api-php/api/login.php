<?php
$data = json_decode(file_get_contents("php://input"));

if (isset($data->email) && isset($data->password)) {
    echo json_encode(["message" => "Logged in with email " . $data->email]);
} else {
    http_response_code(400);
    echo json_encode(["message" => "Email and password are required"]);
}
