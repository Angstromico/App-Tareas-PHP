<?php
include('conexion.php');
?>
<?php
include('includes/header.php');
?>
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-4">
        <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save.php" method="POST" class="d-grid gap-4">
                    <div class="form-group">
                        <input type="text" class="form-control " name="titulo"
                        placeholder="Tarea a Realizar" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" rows="2" class="form-control" 
                        placeholder="Describa la Tarea"></textarea>
                    </div>
                    <div class="form-group d-grid">
                    <input type="submit" class="btn btn-primary" name="salvar_tarea"
                    value="Guardar Tarea">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $consulta = "SELECT * FROM Tareas";
                        $resultado = pg_query($conexion, $consulta);
                        while ($fila = pg_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td><?php echo $fila['titulo']; ?></td>
                                <td><?php echo $fila['descripcion']; ?></td>
                                <td><?php echo $fila['fecha']; ?></td>
                                <td>
                                    <a class="btn btn-secondary" href="editar.php?id=<?php echo $fila['id']; ?>"><i class="fas fa-marker"></i></a>
                                    <a class="btn btn-danger" href="eliminar.php?id=<?php echo $fila['id']; ?>"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>