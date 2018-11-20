<?php require 'header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-12 post">
            <article>
                <h2 class="title">Iniciar Sesion</h2>
                <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="submit" value="Iniciar sesion">
                </form>
            </article>
        </div>
    </div>
</div>


<?php require 'footer.php' ?>


</body>
</html>