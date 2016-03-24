<?php
/*Template Name: Front Page*/
?>
<?php get_header(); ?>

    <div id="primary" class="content-area row row-centered">
        <main id="main" class="site-main " role="main" style="padding:0;margin-top:10px;">
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
                
                    <div class="col-sm-6" style="background:#000;padding:0;">
                        <?php the_post_thumbnail("100porcento"); ?>
                    </div>
                    <div class="col-sm-6 container-fluid copy-height" style="background:#000;padding:0;overflow:hidden;">
                <?php } else { 
                    if($i==1 OR $i==3)
                    echo '<div>'
                    ?>
                    <div class="col-xs-6" style="background:#323;padding:0;">
                        <?php the_post_thumbnail("100porcento"); ?>

                    </div>
                <?php 
                    if($i==2 OR $i==4)
                    echo '</div>';
                    
                } ?>
                
            <?php
            $i++;
            // End the loop.
            endwhile;
            ?>
            </div>
             </div>
            <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                'next_text'          => __( 'Next page', 'twentysixteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
            ) );
        endif;
        ?>
        
       
    </main><!-- .site-main -->

    <?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_footer(); ?>
  
