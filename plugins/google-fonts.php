<?php
/**
 * Plugin Name: Add Google Fonts
 * Short Name: google_fonts
 * Description: Sample wordpress plugin to add google fonts
 * Author: Kazim Akhlaqi (akhlaqi.kazim@gmail.com)
 * Version: 1.0.0
 * Requires at least: 3.0
 * Tested up to: 4.7
 *
 * Author URI: https://github.com/Kazim-Akhlaqi
 *
 *
 * Copyright (C) 2018
 *
 * This program is free software - you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.	If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Register and enqueues styles to add Google fonts
 *
 * @return void
 */
function add_google_fonts() {
    //A safe way to register a style file for later use.
    wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:700,900' );
    //enqueues the registered style.
    wp_enqueue_style( 'googleFonts' );
}
//Calling the function to add google fonts with the proper hook.
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

?>
