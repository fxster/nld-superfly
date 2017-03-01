<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class('column'); ?>>

<?php the_post_thumbnail('large');?>

<div class="events-wrap_content">

<ul class="details-wrap">
<li>Term: <strong><?php the_field('term_range');?></strong></li>
<li>Price: <strong><?php the_field('term_price');?></strong></li>
</ul>	

<h2 class="tribe-events-list-event-title"><?php the_title();?></h2>
	
<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>

<a href="<?php the_permalink();?>" class="button small" rel="bookmark">Find out more</a>

</div>


</li>
