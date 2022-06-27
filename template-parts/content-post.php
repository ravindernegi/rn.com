<article class="mb-2" itemscope itemtype ="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" itemprop="name">
	    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?/* <p class="blog-post-meta">By <?php echo get_the_author(); ?> | <?php the_date() ?> </p> */?>
	</header><!-- .entry-header -->
	<div class="entry-content" itemprop="articleBody">
	    <div class="row">
	        <?php if ( has_post_thumbnail() ) {?>
                <div class="col-12 mb-2">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php
        		    the_post_thumbnail( 'medium_large', array( 'class' => '  img-fluid' ) );
        		?>
        		</a>
                </div>
                <?php }?>
                <div class="col-12">
                    <?php echo get_the_excerpt(); ?> 
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        		    <strong>आगे पढ़ें।</strong>
        		    </a>
        	    </div>
            </div>
	</div>
</article>
