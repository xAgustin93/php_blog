<?php require 'header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-12 post">
            <article>
                <h2 class="title"><?php echo $post['titulo'] ?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']) ?></p>
                <div class="thumb">
                    <a href="#">
                        <img class="img-fluid" src="<?php echo RUTA; ?>/img/<?php echo $post['thumb'] ?>" alt="<?php echo $post['titulo'] ?>">
                    </a>
                </div>
                <p class="texto">
                    <?php echo nl2br($post['texto']) ?>
                </p>
            </article>
        </div>

    </div>
</div>

<?php require 'footer.php' ?>

</body>
</html>