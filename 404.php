<?php get_header(); ?>

<div class="row">
    <div class="col-md-8">

        <?php
            // breadcrumb
            include_once('breadcrumb.php');
		?>
		<div class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'thmj' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'thmj' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</div>
    </div>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>