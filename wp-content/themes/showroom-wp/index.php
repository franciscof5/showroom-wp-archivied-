<?php get_header(); ?>

    <div id="primary" class="content-area row row-centered">
        <main id="main" class="site-main col-md-10 col-md-offset-1" role="main">
		<?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_format() );

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                'next_text'          => __( 'Next page', 'twentysixteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </main><!-- .site-main -->

    <?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_footer(); ?>
  
