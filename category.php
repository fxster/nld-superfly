<?php get_header(); ?>
<div class="pageContainer">
	<div class="row">
		<div class="large-9 columns">
			<ul class="blogPosts">
				<?php while (have_posts()) : the_post(); ?>	
					<li class="indexPost">
						<?php the_post_thumbnail();?>	
						<?php the_title('<h1>','</h1>'); ?>
						<?php the_content();?>	
						<a class="button" href="<?php the_permalink();?>">Read More</a>
					</li>
				<?php endwhile; ?>	
			</ul>
		</div>
		<div class="large-3 columns">
			<?php include(TEMPLATEPATH . '/sidebar.php'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>