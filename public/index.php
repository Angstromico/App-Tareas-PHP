<?php

session_start();

// Autoloader simple para clases en src/
spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/../src/' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

use Controllers\TaskController;

$controller = new TaskController();

// Enrutador básico por parámetro 'action'
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'destroy':
        $controller->destroy();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
