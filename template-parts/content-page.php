<article itemscope itemtype ="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"  itemprop="name">
		<?php the_title( '<h1 class="blog-post-title">', '</h1>' ); ?>
		<?/* <p class="blog-post-meta">By <?php echo get_the_author(); ?> | <?php the_date() ?> </p> */?>
	</header><!-- .entry-header -->
	<div itemprop="articleBody" class="entry-content">
		<?php
		
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'thmj' ),
					'after'  => '</div>',
				)
			);
			?>
	</div>
</article>



