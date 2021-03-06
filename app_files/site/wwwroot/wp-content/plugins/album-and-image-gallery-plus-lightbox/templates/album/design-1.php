<?php
/**
 * Album Design 1 HTML
 * 
 * @package Album and Image Gallery Plus Lightbox
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} 
?>

<div class="<?php echo $wrpper_cls; ?>">
	<div class="aigpl-inr-wrp">

		<div class="aigpl-img-wrp" style="<?php echo $album_height_css; ?>">
			<a class="aigpl-img-link" href="<?php echo $album_image; ?>" target="<?php echo $album_link_target; ?>">
				<?php if($image_link) { ?>
				<img class="aigpl-img" <?php if($lazyload) { ?>data-lazy="<?php echo esc_url($image_link); ?>" <?php } ?> src="<?php if(empty($lazyload)) { echo esc_url($image_link); } ?>" alt="<?php the_title_attribute(); ?>" />
				<?php } ?>
			</a>
		</div>

		<?php if( $album_title ) { ?>
			<a class="aigpl-img-link" href="<?php echo $album_image; ?>" target="<?php echo $album_link_target; ?>">
				<div class="aigpl-img-title aigpl-center"><?php echo $post->post_title; ?></div>
			</a>
		<?php } ?>

		<?php if( !empty($total_photo_lbl) ) { ?>
		<div class="aigpl-img-count aigpl-center"><?php echo $total_photo_lbl; ?></div>
		<?php } ?>

			
	</div>
</div>