<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero" style="background-image: url('<?php echo wp_get_attachment_url( get_theme_mod( 'setting_hero_background_image' ) );?>')">
                        <div class="overlay" style="min-height: <?php echo get_theme_mod( 'setting_hero_height', '800' );?>px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1><?php echo get_theme_mod( 'setting_hero_title', 'Welcome to Affinity' ); ?></h1>
                                    <p><?php echo nl2br( get_theme_mod( 'setting_hero_subtitle', 'We are a creative group of people who design influential brands and digital experiences.' ) ); ?></p>
                                    <a href="<?php echo get_theme_mod( 'setting_hero_button_link', '#' ); ?>"><?php echo get_theme_mod( 'setting_hero_button_text', 'Learn More' ); ?></a>
                                </div>
                            </div>
                        </div>
                    </section>
                        <section class="services">
                            <h2>Services</h2>
                        <div class="container">
                            <div class="services-item">
                                <?php
                                    if( is_active_sidebar( 'services-1' ) ):
                                        dynamic_sidebar( 'services-1');
                                    endif; 
                                ?>
                            </div>
                            <div class="services-item">
                                <?php
                                    if( is_active_sidebar( 'services-2' ) ):
                                        dynamic_sidebar( 'services-2');
                                    endif; 
                                ?>
                            </div>
                            <div class="services-item">
                                <?php
                                    if( is_active_sidebar( 'services-3' ) ):
                                        dynamic_sidebar( 'services-3');
                                    endif; 
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2>Latest News</h2>
                        <div class="container">
                            <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'category_in' => array( 8, 9, 10 ),
                                    'category_not_in' => array( 1 )
                                );
                                $postlist = new WP_Query( $args );

                                if( $postlist->have_posts() ):
                                    while( $postlist->have_posts() ) : $postlist->the_post();
                                        get_template_part( 'parts/content', 'latest-news');
                                    endwhile;
                                    wp_reset_postdata();
                                else: ?>
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>