<?php

get_header();
?>
        <div class="row">
          <div class="col-md-8">

            <?php
                if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
                  get_template_part( 'template-parts/content', 'post' );
                  endwhile;
                endif;
            ?>
            <nav class="blog-pagination" aria-label="Pagination">
              <?php

                global $wp_query;
                $total = $wp_query->max_num_pages;
                // Only paginate if we have more than one page
                if ( $total > 1 )  {
                    // Get the current page
                    if ( !$current_page = get_query_var('paged') )
                          $current_page = 1;
                    // Structure of “format” depends on whether we’re using pretty permalinks
                    $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
                    echo paginate_links(array(
                          'base' => get_pagenum_link(1) . '%_%',
                          'format' => $format,
                          'current' => $current_page,
                          'total' => $total,
                          'mid_size' => 4,
                          'type' => 'list'
                    ));
                }?>
            </nav>
          </div>

          <div class="col-md-4">
            <?php get_sidebar(); ?>
          </div>
        </div>
 <?php

get_footer();

?>