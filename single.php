<?php get_header(); ?>

<?php get_template_part( 'blocks/content', 'breadcrumb' ); ?>

<div class="page-wrap">
	<div class="row">
		<div class="large-10 large-centered columns">
			<div class="content-wrap">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_post_thumbnail('large'); ?>
					<div class="post-content_wrap">
						<?php the_title('<h1>','</h1>'); ?>
						<ul class="details-wrap">
						<li>Posted: <strong><?php the_date('Y-m-d'); ?></strong></li> <li>Author: <strong><?php the_author(); ?></strong></li>
					</ul>	
						<?php the_content();?>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>