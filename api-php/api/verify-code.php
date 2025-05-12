<?php
$data = json_decode(file_get_contents("php://input"));

if (isset($data->code) && isset($data->email)) {
    echo json_encode(["message" => "Verification code " . $data->code . " validated for " . $data->email]);
} else {
    http_response_code(400);
    echo json_encode(["message" => "Code and email are required"]);
}
