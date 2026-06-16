<?php

namespace Controllers;

use Models\Task;

class TaskController {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    public function index() {
        $tasks = $this->taskModel->getAll();
        include __DIR__ . '/../Views/tasks/index.php';
    }

    public function store() {
        if (isset($_POST['salvar_tarea'])) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            
            if ($this->taskModel->create($titulo, $descripcion)) {
                $_SESSION['message'] = 'Tarea Guardada';
                $_SESSION['message_type'] = 'success';
            }
        }
        header('Location: index.php');
    }

    public function edit() {
        if (isset($_GET['id'])) {
            $task = $this->taskModel->getById($_GET['id']);
            if ($task) {
                include __DIR__ . '/../Views/tasks/edit.php';
                return;
            }
        }
        header('Location: index.php');
    }

    public function update() {
        if (isset($_POST['actualizacion']) && isset($_GET['id'])) {
            $id = $_GET['id'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            
            if ($this->taskModel->update($id, $titulo, $descripcion)) {
                $_SESSION['message'] = 'Tarea Modificada Efectivamente';
                $_SESSION['message_type'] = 'warning';
            }
        }
        header('Location: index.php');
    }

    public function destroy() {
        if (isset($_GET['id'])) {
            if ($this->taskModel->delete($_GET['id'])) {
                $_SESSION['message'] = 'Tarea Removida';
                $_SESSION['message_type'] = 'danger';
            }
        }
        header('Location: index.php');
    }
}
