<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
		<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );
			?>

			<div class="inside-article">

				<?php
				/**
				 * generate_before_content hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_featured_page_header_inside_single - 10
				 */
				do_action( 'generate_before_content' );
				?>

				<header class="entry-header" style="text-align: center;">
					<h1 class="entry-title" itemprop="headline">Ups! Nie ma takiej strony...</h1>
				</header><!-- .entry-header -->

				<?php
				/**
				 * generate_after_entry_header hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_post_image - 10
				 */
				do_action( 'generate_after_entry_header' );
				?>

				<div class="entry-content" itemprop="text">
				    <figure style="margin-bottom: 3em;">
					    <img src="https://www.hakerwspodnicy.pl/wp-content/uploads/2020/06/404-robot.gif" alt="Oops! 404 Error with a broken robot" class="no-lightbox">
				        <figcaption style="font-size: .8em; text-align: center;"><a href="https://stories.freepik.com/illustration/oops-404-error-with-a-broken-robot/rafiki#2DBAECFF">Oops! 404 Error with a broken robot</a></figcaption>		    
				    </figure>
				    <div style="text-align: center;">
					   <?php
					   echo '<h2>Może spróbuj wyszukać?</h2>'; // WPCS: XSS OK.

					   get_search_form();
					   ?>
					</div>
				</div><!-- .entry-content -->

				<?php
				/**
				 * generate_after_content hook.
				 *
				 * @since 0.1
				 */
				do_action( 'generate_after_content' );
				?>

			</div><!-- .inside-article -->

			<?php
			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

get_footer();
