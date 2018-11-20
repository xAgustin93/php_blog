<?php require 'header.php'; ?>


<div class="container">
    <div class="row">
        
        <div class="col-12"><?php echo $titulo ?></div>

        <?php foreach($resultados as $post): ?>
            <div class="col-12 post">
                <article>
                    <h2 class="title"><a href="<?php echo RUTA ?>single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
                    <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                    <div class="thumb">
                        <a href="<?php echo RUTA ?>single.php?id=<?php echo $post['id']; ?>">
                            <img class="img-fluid" src="<?php echo RUTA; ?>/img/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto']; ?></p>
                    <a href="<?php echo RUTA ?>single.php?id=<?php echo $post['id']; ?>" class="vermas">Ver mas</a>
                </article>
            </div> 
        <?php endforeach; ?>

        <div class="col-12">
            <?php require 'paginacion.php' ?>
        </div>
    </div>
</div>

<footer>
    <?php require 'footer.php' ?>
</footer>

</body>
</html>