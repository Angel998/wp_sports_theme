<?php
/* Este archivo muestra el contenido de una pagina estatica */ ?>

<?php get_header(); ?>

<main class="contenedor pagina seccion no-sidebar">

    <div class="contenido-principal text-center">
        <?php get_template_part('template-parts/page_content'); ?>
    </div>
</main>

<?php get_footer(); ?>