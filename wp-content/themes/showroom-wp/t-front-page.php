<?php
/*Template Name: Front Page*/
?>
<?php get_header(); ?>

    <div id="primary" class="content-area row row-centered">
        <main id="main" class="site-main col-md-10 col-md-offset-1" role="main">
		<div class="container-fluid row" style="height:400px;">
        <?php 
        query_posts( 'posts_per_page=5' );
        if ( have_posts() ) : ?>
            <?php $i=0; ?>
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
                
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                //get_template_part( 'template-parts/content', get_post_format() );
                ?>
                <?php if($i==0) { ?>
                
                    <div class="col-md-6" style="background:#eee;padding:0;height:400px;">
                        <?php the_post_thumbnail("100porcento"); ?>
                    </div>
                <?php } else { ?>
                    <div class="col-md-3" style="background:#323;padding:0;height:200px;">
                        <?php the_post_thumbnail("100porcento"); ?>
                    </div>
                <?php } ?>
                
                    
                
            <?php
            $i++;
            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                'next_text'          => __( 'Next page', 'twentysixteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
            ) );
        endif;
        ?>
        </div>
    </main><!-- .site-main -->

    <?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_footer(); ?>
  
