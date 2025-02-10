<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>

<div class="container px-8 mx-auto xl:px-5 max-w-screen-lg py-5 lg:py-8">
<div class="mt-10 grid gap-10 md:grid-cols-2 lg:gap-10 xl:grid-cols-3">


		<?php if ( have_posts() ) : ?>

	
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			

		else :

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</div>
		</div>

<?php
get_footer();
