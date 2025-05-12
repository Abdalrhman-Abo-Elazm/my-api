<?php
// تفعيل الـ CORS لتجنب مشاكل الوصول
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// استخراج مسار الطلب
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// اختيار الروت بناءً على المسار
switch ($path) {
    case "/api/reset-password":
        require_once "routes/reset-password.php";
        break;
    case "/api/verify-code":
        require_once "routes/verify-code.php";
        break;
    case "/api/create-account":
        require_once "routes/create-account.php";
        break;
    case "/api/login":
        require_once "routes/login.php";
        break;
    case "/api/update-password":
        require_once "routes/update-password.php";
        break;
    case "/api/profile-update":
        require_once "routes/profile-update.php";
        break;
    default:
        http_response_code(404);
        echo json_encode(["message" => "Endpoint not found"]);
}
