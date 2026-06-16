<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="index.php?action=update&id=<?php echo $task['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" value="<?php echo $task['titulo']; ?>"
                        class="form-control" placeholder="Actualiza Titulo" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea name="descripcion" 
                       rows="2" class="form-control" placeholder="Actualización de Descripción"><?php echo $task['descripcion']; ?></textarea>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <input type="submit" value="Enviar" class="btn btn-success" name="actualizacion">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
