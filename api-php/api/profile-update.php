<?php
$data = json_decode(file_get_contents("php://input"));

if (isset($data->skill) && isset($data->phoneNumber) && isset($data->yearsOfExperience)) {
    echo json_encode(["message" => "Profile updated with skill: " . $data->skill . ", phone: " . $data->phoneNumber . ", experience: " . $data->yearsOfExperience]);
} else {
    http_response_code(400);
    echo json_encode(["message" => "Skill, phone number, and years of experience are required"]);
}
