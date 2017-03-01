<?php 

/* Template Name: About NLD */ 

?>

<?php get_header(); ?>

<?php get_template_part( 'blocks/content', 'breadcrumb' ); ?>

<div class="about-hero">
	<div class="about-hero_left content-block" style="background-image: url(<?php the_field('left_block_background');?>);">
		<?php the_field('left_block_content');?>
	</div>
	<div class="about-hero_right content-block" style="background-image: url(<?php the_field('right_block_background');?>);">
		<?php the_field('right_block_content');?>
	</div>
</div>

<div class="about-content section-container"> 
	<div class="row">

		<div class="large-8 large-centered columns large-text_intro">
			<?php the_field('about_intro');?>
		</div>

		<?php if( have_rows('about_slider') ): ?>
			<div class="multiple-items">
				<?php while( have_rows('about_slider') ): the_row(); 
				$icon = get_sub_field('icon');
				$heading = get_sub_field('heading');
				$content = get_sub_field('content');
				?>
				<div class="column slide-content">
					<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
					<h4><?php echo $heading;?></h4>
					<?php echo $content; ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>
</div>


<div class="about-branches">
	<div class="about-branches_inner">
		<div class="row">
			<div class="large-6 columns about-branches_content">

				<?php the_field('branches_content');?>

			</div>
		</div>
	</div>
	<img class="right-image" src="<?php bloginfo('template_url'); ?>/img/test.png"/>
</div>


<?php get_footer(); ?>