<?php
/**
 * Customize API: Pamela_Greene_Art_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Pamela_Greene_Art
 * @since Twenty Twenty-One 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @see WP_Customize_Control
 */
class Pamela_Greene_Art_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @var string
	 */
	public $type = 'pamela-greene-art-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'pamelagreeneart' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/pamela-greene-art/#dark-mode-support', 'pamelagreeneart' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'pamelagreeneart' ); ?>
			</a></p>
		</div>
		<?php
	}
}
