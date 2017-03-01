<?php get_header(); ?>


<?php if(is_account_page()) : ?>

<div class="woo-wrap">
	<div class="row">
		<div class="large-8 large-centered columns">
		<div class="content-wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; endif; ?>
		</div>
	</div>
	</div>
</div>

<?php else : ?>	

<?php get_template_part( 'blocks/content', 'breadcrumb' ); ?>

<div class="page-wrap">
	<div class="row">
		<div class="large-10 large-centered columns">
		<div class="content-wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_title('<h1>','</h1>'); ?>
				<?php the_content();?>
			<?php endwhile; endif; ?>
		</div>
	</div>
	</div>
</div>

<?php endif;?>
<?php get_footer(); ?>