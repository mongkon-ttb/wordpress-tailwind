<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _tw
 */

get_header();
?>
<div>
   <div class="mt-14 flex items-center justify-center ">
      <h1 class="text-brand-primary text-xl font-semibold tracking-tight dark:text-white lg:text-3xl lg:leading-tight">Search results for "<?php echo esc_html(get_search_query()); ?>"</h1>
   </div>
   <div class="mx-auto mt-5 max-w-md">
      <div class="relative">
         <input placeholder="Enter keywords" id="q" class="w-full px-3 py-2 border rounded-md outline-none focus:border-gray-300 focus:shadow-sm dark:bg-gray-900 dark:border-gray-600 dark:focus:border-white" type="text" value="<?php echo esc_html(get_search_query()); ?>" name="q">
         <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 text-gray-400">
               <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
            </svg>
         </div>
      </div>
   </div>
</div>


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

			// Previous/next page navigation.
			_tw_the_posts_navigation();

		else :

			// If no content is found, get the `content-none` template part.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
	</div>
	</div>

<?php
get_footer();
