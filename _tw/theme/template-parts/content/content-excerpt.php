<div class="group cursor-pointer">
   <div class="overflow-hidden rounded-md bg-gray-100 transition-all hover:scale-105 dark:bg-gray-800">
      <a class="relative block aspect-square" href="<?php echo esc_url( get_permalink() ); ?>">
      <img
         alt="Thumbnail"
         loading="lazy"
         decoding="async"
         data-nimg="fill"
         class="object-cover transition-all"
         style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
         sizes="(max-width: 768px) 30vw, 33vw"
         src="https://placehold.co/500x500"
         />
      </a>
   </div>
   <div class="">
      <div>
      <div class="flex gap-3">

      <?php
         $categories = get_the_category();
         if (!empty($categories)) {
            foreach ($categories as $category) {
               echo '<a href="'.esc_url(get_category_link($category->term_id)).'"><span class="inline-block text-xs font-medium tracking-wider uppercase mt-5 text-purple-600">'.esc_html($category->name).'</span></a>';
              // echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
            }
         }
         ?>
         </div>




         <!-- <div class="flex gap-3">
            <a href="/category/design"><span class="inline-block text-xs font-medium tracking-wider uppercase mt-5 text-blue-600">Design</span></a>
            <a href="/category/lifestyle"><span class="inline-block text-xs font-medium tracking-wider uppercase mt-5 text-purple-600">Lifestyle</span></a>
         </div> -->


         <h2 class="text-lg font-semibold leading-snug tracking-tight mt-2 dark:text-white">
            <a href="<?php echo esc_url( get_permalink() ); ?>">
            <span
               class="bg-gradient-to-r from-green-200 to-green-100 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px] dark:from-purple-800 dark:to-purple-900"
               >
            <?php the_title(); ?>
            </span>
            </a>
         </h2>
         <!-- <div class="hidden">
            <p class="mt-2 line-clamp-3 text-sm text-gray-500 dark:text-gray-400">
               <a href="/post/14-architectural-design-ideas-for-spacious-interior">It is a cliche philosophical question, but it touches on something fundamental about how humans relate to the world around them. </a>
            </p>
            </div> -->
         <div class="mt-3 flex items-center space-x-3 text-gray-500 dark:text-gray-400">
            <a href="/author/mario-sanchez">
               <div class="flex items-center gap-3">
                  <div class="relative h-5 w-5 flex-shrink-0">
                     <img
                        alt="Mario Sanchez"
                        loading="lazy"
                        decoding="async"
                        data-nimg="fill"
                        class="rounded-full object-cover"
                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0; right: 0; bottom: 0; color: transparent;"
                        sizes="20px"
                        src="https://gravatar.com/avatar/838f96b68a13d1061c3d4bd54b7f87908c5cbffb4afd496359585541cd0ecab0?s=120"
                        />
                  </div>
                  <span class="truncate text-sm"><?php the_author(); ?>
                  </span>
               </div>
            </a>
            <span class="text-xs text-gray-300 dark:text-gray-600">•</span><time class="truncate text-sm" datetime="2022-10-21T06:05:00.000Z">
               <?php echo get_the_date('F j, Y'); // Custom format (e.g., "February 5, 2025") ?>
            </time>
         </div>
      </div>
   </div>
</div>
<!-- END POST-->