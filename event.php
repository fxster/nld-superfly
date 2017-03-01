<?php 

/* Template Name: Events */ 

?>

<?php get_header(); ?>


<?php if(!is_single()) : ?>

<div class="events-wrap">
	<div class="row">
	<div class="large-12 columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_title('<h1>','</h1>'); ?>
				<?php the_content();?>
			<?php endwhile; endif; ?>
			</div>
	</div>
</div>


<?php else : ?>


<div class="events-wrap">
	<div class="row">
	<div class="large-10 large-centered columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_title('<h1>','</h1>'); ?>
				<?php the_content();?>
			<?php endwhile; endif; ?>
			</div>
	</div>
</div>

<?php endif;?>	

<?php get_footer(); ?>