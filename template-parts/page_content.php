<?php while (have_posts()) : the_post(); ?>
    <div class="contenedor">
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>
        <p>
            <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail('medium', ['class' => 'imagen-destacada']);
                endif;
                the_content(); ?>
        </p>
    </div>
<?php endwhile; ?>