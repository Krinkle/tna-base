<footer id="footer" role="contentinfo">
    <h2 class="sr-only">Footer</h2>
    <?php
    global $post;
    if ( is_object($post) ) {
        if (!has_category('hide-newsletter', $post->ID)) {
            get_template_part('partials/footer-newsletter');
        }
    }
    ?>
    <div class="footer-content">
        <div class="container">
            <?php get_template_part( 'partials/footer-content' ); ?>
        </div>
    </div>
</footer>
<div class="hidden">
    <p><?php global $pre_path; echo 'Path: '.$pre_path; ?></p>
    <p><?php global $pre_crumbs; echo 'Crumbs: '.$pre_crumbs; ?></p>
    <p><?php echo 'SERVER_ADDR: '.$_SERVER['SERVER_ADDR']; ?></p>
    <p><?php echo 'REMOTE_ADDR: '.$_SERVER['REMOTE_ADDR']; ?></p>
</div>

<?php wp_footer(); ?>

</body>

</html>
