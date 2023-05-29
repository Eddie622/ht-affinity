<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <h1><?php _e( 'Blog', 'ht-affinity' ) ?></h1>
                <div class="container">
                    <div class="blog-items">
                        <?php 
                            if( have_posts() ):
                                while( have_posts() ) : the_post();
                                    get_template_part( 'parts/content', get_post_format() );
                                endwhile;
                                ?>
                                    <div class="htaffinity-pagination">
                                        <div class="pages new">
                                            <?php previous_posts_link( __( "<< Newer posts", 'ht-affinity' ) ); ?>
                                        </div>
                                        <div class="pages old">
                                            <?php next_posts_link( __( "Older posts >>", 'ht-affinity' ) ); ?>
                                        </div>
                                    </div>
                                <?php
                            else: ?>
                                <p><?php _e( 'Nothing yet to be displayed!', 'ht-affinity' ) ?></p>
                        <?php endif; ?>                                
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>