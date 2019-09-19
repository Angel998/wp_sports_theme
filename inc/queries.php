<?php

function gymfitness_lista_clases()
{
    $args = [
        'post_type' => 'gymfitness_clases',
        'posts_per_page' => 10,
        'order' => 'ASC',
        'orderby' => 'title'
    ];
    $clases = new WP_Query($args);
    gymfitness_map_clases($clases);
    wp_reset_postdata();
}

function gymfitness_map_clases($clases = [])
{ ?>
    <ul>
        <?php
            while ($clases->have_posts()) : $clases->the_post();
                ?>

            <li>
                <h1><?php the_title(); ?></h1>
            </li>
        <?php endwhile; ?>
    </ul>

<?php
}
