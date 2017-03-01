<?php 

/* Template Name: Contact */ 

?>

<?php get_header(); ?>

<?php get_template_part( 'blocks/content', 'breadcrumb' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="large-text_intro section-container"> 
	<div class="row">

		<div class="large-8 large-centered columns large-text_intro">
			<?php the_field('intro_content');?>

		</div>

	</div>
</div>

<div class="contact-form section-container">
<div class="contact-form_inner">
<div class="row">
<div class="large-6 large-centered columns">
				<?php the_content();?>
			
</div>
</div>
</div>

<img src="<?php bloginfo('template_url'); ?>/img/contact.png"/>

</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>