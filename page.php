<?php
/* Este archivo muestra el contenido de una pagina estatica */ ?>

<?php get_header(); ?>

<main class="contenedor pagina seccion con-sidebar">

    <div class="contenido-principal">
        <?php get_template_part('template-parts/page_content'); ?>
    </div>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>