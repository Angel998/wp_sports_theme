<?php
/* Este archivo muestra el contenido de una pagina estatica */ ?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="contenedor">
        <h1><?php the_title(); ?></h1>
        <p>
            <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail('medium');
                else :
                    echo "Sin Imagen";
                endif;
                the_content(); ?>
        </p>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>