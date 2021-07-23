<?php
    include('conexion.php');
    if (isset($_POST['salvar_tarea'])) {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        echo $titulo. '<br>';
        echo $descripcion. '<br>';
        $insercion = "INSERT INTO Tarea (titulo, descripcion) VALUES ('$titulo', '$descripcion')";
        $resultado = pg_query($conexion, $insercion);
        if ($resultado) {
            //echo 'Exito <br>';
            $_SESSION['message'] = 'Tarea Guardada';
            $_SESSION['message_type'] = 'success';
            header('location: index.php');
        } else {
            echo 'Error <br>';
        }
        /*if ($resultado) {
            die('Bien');
        }*/
        //echo $insercion. '<br>';
        //echo 'Guardado';
    }