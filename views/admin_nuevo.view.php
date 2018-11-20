<?php require 'header.php'; ?>


<div class="col-12 post">
    <article>
        <h2 class="title">Nuevo articulo</h2>
        <form class="form" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="titulo" placeholder="Titulo del articulo">
            <br>
            <input type="text" name="extracto" placeholder="Extracto del articulo">
            <br>
            <textarea name="texto" placeholder="Texto del articulo"></textarea>
            <br>
            <input type="file" name="thumb">
            <br>
            <input type="submit" value="Crear Articulo">
        </form>
    </article>
</div> 


<?php require 'footer.php'; ?>