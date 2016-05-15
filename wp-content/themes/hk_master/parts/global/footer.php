<footer id="footer" class="row">

    <div id="copyright">
        <?php
        printf(
            __('Copyright &copy; %s %s. All Rights Reserved.', 'nvLangScope'),
            date('Y'),
            get_bloginfo('name')
        );
        ?>
    </div>

    <?php wp_nav_menu([
        'theme_location' => 'footer'
    ]) ?>

</footer>