<?php get_header(); ?>

<?php get_template_part( 'blocks/content', 'breadcrumb' ); ?>

<div class="index-wrap">
<div class="row">

<div class="large-up-2">

				<?php while (have_posts()) : the_post(); ?>	
							<article class="column">

					<?php the_post_thumbnail( 'large' ) ?>

					<div class="events-wrap_content">
					<h2><?php the_title() ?></h2>

					<ul class="details-wrap">
						<li>Posted: <strong><?php the_date('Y-m-d'); ?></strong></li> <li>Author: <strong><?php the_author(); ?></strong></li>
					</ul>	
			
					<?php the_field('short_description'); ?>
					<a href="<?php the_permalink();?>" class="button small" rel="bookmark">Read More</a>
				</div>	
				
	</article>
				<?php endwhile; ?>	

</div>
</div>
</div>

<?php get_footer(); ?>