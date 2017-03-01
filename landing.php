<?php 

/* Template Name: Home */ 

?>

<?php get_header(); ?>

<div class="hero-container">
	<?php if( have_rows('hero_slider') ): ?>
		<div class="single-item">
			<?php while( have_rows('hero_slider') ): the_row(); 
			$image = get_sub_field('hero_image');
			$content = get_sub_field('hero_content');
			$sub = get_sub_field('hero_subheading');
			?>
			<div>
				<div class="landing-hero" style="background-image: url(<?php echo $image['url']; ?>);">		
					<div class="landing-hero_content">
						<div class="row">
							<div class="large-6 columns">
								<span class="landing-hero_content-intro"><?php echo $sub; ?></span>
								<?php echo $content; ?>
							</div>
							<div class="large-6 columns landing-hero_image">
								<img src="<?php bloginfo('template_url'); ?>/img/test-polaroid.png"/>
							</div>
						</div>
					</div>
				</div>	
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
<div class="landing-hero_footer">
	<div class="row">
		<div class="large-12 columns">
			<span>Contact Us 01482 641690</span>
		</div>
	</div>
</div>
</div>	

<div class="landing-intro section-container"> 
	<div class="row">
		<div class="large-6 large-centered columns large-text_intro">
			<?php the_field('class_intro');?>
		</div>
		<?php if( have_rows('classes') ): ?>
			<div class="large-up-3">
				<?php while( have_rows('classes') ): the_row(); 
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$content = get_sub_field('content');
				$link = get_sub_field('link');
				?>
				<div class="column class-block">
					<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
					<h3><?php echo $title; ?></h3>
					<?php echo $content; ?>
					<a href="<?php echo $link; ?>" class="button">Find Out More</a>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>
</div>

<div class="news-wrap section-container">
	<div class="row">

		<div class="large-6 columns">

			<div class="news-wrap_intro">
				<h3>Next <span style="color:#FCC500;">Workshop</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna al iquam erat volutpat. Ut wisi enim ad minim veniam.</p>
			</div>	

			<?php 
			$venue_details = tribe_get_venue_details();
			$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';
			$organizer = tribe_get_organizer();
			$args = array('post_type' => 'tribe_events', 'posts_per_page' => 1); $wp_query = new WP_Query( $args );?>
			
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
				
				<?php echo tribe_event_featured_image( null, 'large' ) ?>
				<div class="events-wrap_content">
					<h2 class="tribe-events-list-event-title"><?php the_title() ?></h2>
					<ul class="details-wrap">
						<?php if ( tribe_get_cost() ) : ?>
							<li>Price: <strong><?php echo tribe_get_cost( null, true ); ?></strong></li>	
						<?php endif; ?>
						<li>Date: <strong><?php echo tribe_events_event_schedule_details() ?></strong></li>
						<?php if (tribe_get_venue()) : ?>
							<li>Location: <strong><?php echo tribe_get_venue() ;?>, <?php echo tribe_get_full_address(); ?></strong></li>
						<?php endif; ?>
					</ul>	
					<?php the_field('short_description'); ?>
					<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="button small" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?></a>
				</div>
			<?php endwhile; wp_reset_query();?>

		</div>

		<div class="large-6 columns">

			<div class="news-wrap_intro spotlight-wrap">
				<h3>In The <span style="color:#FCC500;">Spotlight</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna al iquam erat volutpat. Ut wisi enim ad minim veniam.</p>
			</div>	


			<?php $args = array('post_type' => 'post', 'posts_per_page' => 1); $wp_query = new WP_Query( $args );?>
				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();?>

					<article>

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
			
				<?php endwhile; wp_reset_query();?>


		</div>

	</div>
</div>

<?php get_footer(); ?>