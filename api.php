<?php
session_start();

header('Content-Type: application/json');

$route = isset($_GET['route']) ? trim($_GET['route'], "/") : '';

switch ($route) {
    case 'api/elencoComunicazioni':
        require_once ("./api/elencoComunicazioni.php");
        echo json_encode(API_elencoComunicazioni($_GET, $_POST, $_SESSION));
        break;

    default:
        http_response_code(404);
        echo json_encode(["error" => "Endpoint not found"]);
}
?>
