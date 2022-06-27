<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">

        <?php
            // breadcrumb
            include_once('breadcrumb.php');

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End the loop.
		?>

    </div>
</div>

<?php get_footer(); ?>