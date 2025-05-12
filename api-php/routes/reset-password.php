<?php
$data = json_decode(file_get_contents("php://input"));

if (isset($data->email)) {
    echo json_encode(["message" => "Password reset email sent to " . $data->email]);
} else {
    http_response_code(400);
    echo json_encode(["message" => "Email is required"]);
}
