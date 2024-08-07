<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require '../views/home.php';
        break;
    case '/about':
        require '../views/about.php';
        break;
    default:
        http_response_code(404);
        echo 'Page Not Found';
        break;
}
?>
