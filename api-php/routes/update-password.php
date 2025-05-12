<?php
$data = json_decode(file_get_contents("php://input"));

if (isset($data->password) && isset($data->confirmPassword)) {
    if ($data->password === $data->confirmPassword) {
        echo json_encode(["message" => "Password updated successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Passwords do not match"]);
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "Password and confirm password are required"]);
}
