<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pamela_Greene_Art
 * @since Twenty Twenty-One 1.0
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
	Pamela_Greene_Art_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	Pamela_Greene_Art_print_first_instance_of_block( 'core/embed', $content );
} else {
	Pamela_Greene_Art_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
