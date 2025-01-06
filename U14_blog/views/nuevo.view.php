<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Nuevo articulo</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" enctype="multipart/form-data" method="post">
                <input name="titulo" placeholder="Titulo del articulo" type="text">
                <input name="extracto" placeholder="Extracto del articulo" type="text">
                <textarea name="texto" placeholder="Texto del articulo"></textarea>
                <input name="thumb" type="file">

                <button type="submit">Crear articulo</button>
            </form>
        </article>
    </div>
</div>

<?php require 'footer.php'; ?>