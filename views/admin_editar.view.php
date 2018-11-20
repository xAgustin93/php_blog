<?php require 'header.php'; ?>


<div class="col-12 post">
    <article>
        <h2 class="title">Editar articulo</h2>
        <form class="form" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">




            <input type="text" name="titulo" value="<?php echo $post['titulo']; ?>">
            <br>
            <input type="text" name="extracto" value="<?php echo $post['extracto']; ?>">
            <br>
            <textarea name="texto"><?php echo $post['texto']; ?></textarea>
            <br>
            <input type="file" name="thumb">
            <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">
            <br>
            <input type="submit" value="Modificar Articulo">
        </form>
    </article>
</div> 


<?php require 'footer.php'; ?>