<?php
$data = json_decode(file_get_contents("php://input"));

if (isset($data->username) && isset($data->email) && isset($data->password)) {
    echo json_encode(["message" => "Account created for " . $data->username . " with email " . $data->email]);
} else {
    http_response_code(400);
    echo json_encode(["message" => "Username, email, and password are required"]);
}
