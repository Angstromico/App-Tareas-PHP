<?php 
    include('conexion.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        //echo 'Deleting ID '. $id;
        $eliminando = "DELETE FROM Tareas WHERE id = $id";
        $eliminado = mysqli_query($conexion, $eliminando);
        if(!$eliminado) {
            die('Fallo');
        };
        $_SESSION['message'] = 'Tarea Removida';
        $_SESSION['message_type'] = 'danger';
        header('Location: index.php');
    };