<?php require '../views/header.php'; ?>


<div class="container">
    <div class="row">

        <div class="col-12">Panel de control</div>

        <div class="col-12">
            <a href="nuevo.php" class="btn">Nuevo Post</a>
            <a href="cerrar.php" class="btn">Cerrar Sesion</a>
        </div>

        <?php foreach($posts as $post): ?>
            <div class="col-12 post">
                <article>
                    <h2 class="titulo"><?php echo $post['id'] . ' - ' . $post['titulo']; ?></h2>
                    <a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
                    <a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
                    <a href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
                </article>
            </div> 
        <?php endforeach; ?>

        <div class="col-12">
            <?php require '../paginacion.php' ?>
        </div>
    </div>
</div>

<?php require '../views/footer.php' ?>

</body>
</html>