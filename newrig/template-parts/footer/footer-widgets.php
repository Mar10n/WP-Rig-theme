<?php
/**
 * Template part for displaying the footer widgetized area.
 *
 * @package newrig
 */

namespace WP_Rig\WP_Rig;

if ( ! newrig()->is_footer_widgets_active() ) {
	return;
}

newrig()->print_styles( 'newrig-footer-widgets', 'newrig-widgets' );

?>
<aside id="footer-widgets" class="footer-widgets-area widget-area">
	<?php newrig()->display_footer_widgets(); ?>
</aside><!-- #secondary -->
