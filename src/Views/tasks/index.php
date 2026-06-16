<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-4">
        <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php unset($_SESSION['message']); unset($_SESSION['message_type']); } ?>
            <div class="card card-body">
                <form action="index.php?action=store" method="POST" class="d-grid gap-4">
                    <div class="form-group">
                        <input type="text" class="form-control " name="titulo"
                        placeholder="Tarea a Realizar" autofocus required>
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
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?php echo $task['titulo']; ?></td>
                            <td><?php echo $task['descripcion']; ?></td>
                            <td><?php echo $task['fecha']; ?></td>
                            <td>
                                <a class="btn btn-secondary" href="index.php?action=edit&id=<?php echo $task['id']; ?>"><i class="fas fa-marker"></i></a>
                                <a class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?')" href="index.php?action=destroy&id=<?php echo $task['id']; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
