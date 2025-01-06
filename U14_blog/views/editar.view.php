<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Editar articulo</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" enctype="multipart/form-data" method="post">
                <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                <input name="titulo" value="<?php echo $post['titulo']; ?>" type="text">
                <input name="extracto" value="<?php echo $post['extracto']; ?>" type="text">
                <textarea name="texto"><?php echo $post['texto']; ?></textarea>
                <input name="thumb" type="file">
                <input name="thumb-guardada" type="hidden" value="<?php echo $post['thumb']; ?>">

                <button type="submit">Modificar articulo</button>
            </form>
        </article>
    </div>
</div>

<?php require 'footer.php'; ?>