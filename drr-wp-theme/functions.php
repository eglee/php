<?php
/**
 * Shape functions and definitions
 *
 * @package Shape
 * @since Shape 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Shape 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 616; /* pixels */
	remove_filter ('the_content', 'wpautop');

