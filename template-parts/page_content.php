<?php while (have_posts()) : the_post(); ?>
    <div class="contenedor">
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>
        <p>
            <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail('medium', ['class' => 'imagen-destacada']);
                else :
                    echo "<p>Sin Imagen</p>";
                endif;
                the_content(); ?>
        </p>
    </div>
<?php endwhile; ?>