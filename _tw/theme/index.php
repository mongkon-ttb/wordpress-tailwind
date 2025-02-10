<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>




		 <div class="container px-8 mx-auto xl:px-5 max-w-screen-lg py-5 lg:py-8">
		 <h2 class="text-lg font-semibold leading-snug tracking-tight mt-2 dark:text-white">
            <a href="<?php echo esc_url( get_permalink() ); ?>">
            <span
               class="bg-gradient-to-r from-green-200 to-green-100 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 bg-[length:100%_3px] bg-[length:100%_10px] dark:from-purple-800 dark:to-purple-900"
               >
            CATEGORY
            </span>
            </a>
         </h2>
<div class="mt-10 grid gap-10 md:grid-cols-2 lg:gap-10 xl:grid-cols-3">


		<?php
		if ( have_posts() ) {

			if ( is_home() && ! is_front_page() ) :
				?>
				<header class="entry-header">
					<h1 class="entry-title"><?php single_post_title(); ?></h1>
				</header><!-- .entry-header -->
				<?php
			endif;

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content', 'excerpt' );
			}

			// Previous/next page navigation.
			_tw_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

	</div>
	</div>

<?php
get_footer();
