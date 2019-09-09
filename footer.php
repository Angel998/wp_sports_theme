<footer class="contenedor site-footer">
    <hr>

    <div class="contenido-footer">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu-footer'
        ]);
        ?>

        <p class="copyright">
            <?php echo get_bloginfo('name'); ?>
            &copy;
            <?php echo date('Y'); ?>
        </p>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>