<?php
/**
 * Function Custom meta box for Premium
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.2.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<!-- <div class="pro-notice"><strong><?php //echo sprintf( __( 'Utilize this <a href="%s" target="_blank">Premium Features (With Risk-Free 30 days money back guarantee)</a> to get best of this plugin with Annual or Lifetime bundle deal.', 'wp-logo-showcase-responsive-slider-slider'), WPLS_PLUGIN_LINK_UNLOCK); ?></strong></div> -->

	<!-- <div class="wpls-black-friday-banner-wrp">
		<a href="<?php //echo esc_url( WPLS_PLUGIN_LINK_UNLOCK ); ?>" target="_blank"><img style="width: 100%" src="<?php //echo esc_url( WPLS_URL ); ?>assets/images/black-friday-banner.png" alt="black-friday-banner" /></a>
	</div> -->

	<strong style="color:#2ECC71; font-weight: 700;"><?php echo sprintf( __( ' <a href="%s" target="_blank" style="color:#2ECC71;">Upgrade To Pro</a> and Get Designs, Optimization, Security, Backup, Migration Solutions @ one stop.', 'countdown-timer-ultimate'), WPLS_PLUGIN_LINK_UNLOCK); ?></strong>

<!-- <div class="pro-notice">
	<strong>
		<?php //echo sprintf( __( 'Try All These <a href="%s" target="_blank">PRO Features in Essential Bundle Free For 5 Days.</a>', 'wp-logo-showcase-responsive-slider-slider'), WPLS_PLUGIN_LINK_UNLOCK); ?>
	</strong>
</div> -->

<table class="form-table wpls-metabox-table">
	<tbody>
		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('Layouts', 'wp-logo-showcase-responsive-slider-slider'); ?><span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><strong><?php esc_html_e('6 (Grid,  Slider, Center, List, Ticker and Filter ). In lite version only Slider and Center layout.', 'wp-logo-showcase-responsive-slider-slider'); ?></strong></span>
			</td>
		</tr>

		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('Designs', 'wp-logo-showcase-responsive-slider-slider'); ?><span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><strong>15+</strong> <?php esc_html_e('In lite version only one design.', 'wp-logo-showcase-responsive-slider-slider'); ?></span>
			</td>
		</tr>

		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('WP Templating Features', 'wp-logo-showcase-responsive-slider-slider'); ?> <span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><?php esc_html_e('You can modify plugin html/designs in your current theme.', 'wp-logo-showcase-responsive-slider-slider'); ?></span>
			</td>
		</tr>

		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('Shortcode Generator', 'wp-logo-showcase-responsive-slider-slider'); ?> <span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><strong><?php esc_html_e('Play with all shortcode parameters with preview panel. No documentation required.' , 'wp-logo-showcase-responsive-slider-slider'); ?></strong></span>
			</td>
		</tr>

		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('Tooltip', 'wp-logo-showcase-responsive-slider-slider'); ?><span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><strong><?php esc_html_e('Enable tooltip on logo.', 'wp-logo-showcase-responsive-slider-slider'); ?></strong></span>
			</td>
		</tr>

		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('Drag & Drop Slide Order Change', 'wp-logo-showcase-responsive-slider-slider'); ?> <span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><?php esc_html_e('Arrange your desired slides with your desired order and display.' , 'wp-logo-showcase-responsive-slider-slider'); ?></span>
			</td>
		</tr>

		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('Page Builder Support', 'wp-logo-showcase-responsive-slider-slider'); ?> <span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><strong><?php esc_html_e('Gutenberg Block, Elementor, Bevear Builder, SiteOrigin, Divi, Visual Composer and Fusion Page Builder Support', 'wp-logo-showcase-responsive-slider-slider'); ?></strong></span>
			</td>
		</tr>

		<tr class="wpls-pro-feature">
			<th>
				<?php esc_html_e('Exclude Logos and Exclude Some Categories', 'wp-logo-showcase-responsive-slider-slider'); ?> <span class="wpls-pro-tag"><?php esc_html_e('PRO','wp-logo-showcase-responsive-slider-slider');?></span>
			</th>
			<td>
				<span class="description"><strong><?php esc_html_e('Do not display the logos & Do not display the logos for particular categories.' , 'wp-logo-showcase-responsive-slider-slider'); ?></strong></span>
			</td>
		</tr>
	</tbody>
</table><!-- end .wpls-metabox-table -->