<?php
    include('conexion.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $seleccionando = "SELECT * FROM Tareas WHERE id = $id";
        $seleccionado = mysqli_query($conexion, $seleccionando);
        if(mysqli_num_rows($seleccionado) == 1) {
            $fila = mysqli_fetch_assoc($seleccionado);
            $titulo = $fila['titulo'];
            $descripcion = $fila['descripcion'];
        }
    } 
    if(isset($_POST['actualizacion'])) {
        //echo 'actualizando';
        $id = $_GET['id'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        //echo $id. '<br>';
        //echo $titulo. '<br>';
        //echo $descripcion. '<br>';
        $actualizacion = "UPDATE Tareas SET titulo = '$titulo', descripcion = '$descripcion' WHERE id = '$id'";
        mysqli_query($conexion, $actualizacion);
        $_SESSION['message'] = 'Tarea Modificada Efectivamente';
        $_SESSION['message_type'] = 'warning';
        header('Location: index.php');
    } 
?>
<?php include('includes/header.php') ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" value="<?php echo $titulo; ?>"
                        class="form-control" placeholder="Actualiza Titulo">
                    </div>
                    <div class="form-group">
                    <textarea type="text" name="descripcion" 
                       rows="2" class="form-control" placeholder="Actualización de Descripción"><?php echo $descripcion; ?></textarea>
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-success" name="actualizacion">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>