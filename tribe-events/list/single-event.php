<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>

<?php echo tribe_event_featured_image( null, 'large' ) ?>

<div class="events-wrap_content">

	<?php do_action( 'tribe_events_before_the_event_title' ) ?>
	<h2 class="tribe-events-list-event-title"><?php the_title() ?></h2>
	<?php do_action( 'tribe_events_after_the_event_title' ) ?>

	<ul class="details-wrap">


		<?php if ( tribe_get_cost() ) : ?>
		<li>Price: <strong><?php echo tribe_get_cost( null, true ); ?></strong></li>	
		<?php endif; ?>



		<li>Date: <strong><?php echo tribe_events_event_schedule_details() ?></strong></li>
		<?php if (tribe_get_venue()) : ?>
			<li>Location: <strong><?php echo tribe_get_venue() ;?>, <?php echo tribe_get_full_address(); ?></strong></li>
		<?php endif; ?>
		
	</ul>	

	<?php do_action( 'tribe_events_before_the_content' ) ?>

	<?php the_field('short_description');?>

	<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="button small" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?></a>

</div>
<?php
do_action( 'tribe_events_after_the_content' );
