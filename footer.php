<?php get_template_part( 'blocks/content', 'schools' ); ?>

<?php get_template_part( 'blocks/content', 'signup' ); ?>

<footer>
<div class="row">
<div class="large-4 large-centered columns">
<img src="<?php bloginfo('template_url'); ?>/img/logo/footer-logo.png" />
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
<span class="superfly">Designed by <a href="#">Superfly Marketing</a> 🔥</span>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>