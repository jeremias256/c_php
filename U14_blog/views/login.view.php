<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Inicar Sesion</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" method="post">
                <input name="usuario" placeholder="Usuario" type="text" />
                <input name="password" placeholder="Contrasena" type="password" />
                <button class="submit-btn" type="submit">Iniciar sesion</button>
            </form>
        </article>
    </div>
</div>

<?php require 'footer.php'; ?>