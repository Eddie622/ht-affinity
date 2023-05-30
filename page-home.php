<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero" style="background-image: url('<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'setting_hero_background_image' ) ) );?>')">
                        <div class="overlay" style="min-height: <?php echo esc_attr( get_theme_mod( 'setting_hero_height', '800' ) );?>px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1><?php echo esc_html( get_theme_mod( 'setting_hero_title', __( 'Welcome to Affinity', 'ht-affinity' ) ) ); ?></h1>
                                    <p><?php echo nl2br( esc_html( get_theme_mod( 'setting_hero_subtitle', __( 'We are a creative group of people who design influential brands and digital experiences.', 'ht-affinity' ) ) ) ); ?></p>
                                    <a href="<?php echo esc_url( get_theme_mod( 'setting_hero_button_link', '#' ) ); ?>"><?php echo esc_html( get_theme_mod( 'setting_hero_button_text', __( 'Learn More', 'ht-affinity' ) ) ); ?></a>
                                </div>
                            </div>
                        </div>
                    </section>
                        <section class="services">
                            <h2><?php esc_html_e( 'Services', 'ht-affinity') ?></h2>
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
                        <h2><?php esc_html_e( 'Latest News', 'ht-affinity') ?></h2>
                        <div class="container">
                            <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => esc_html( get_theme_mod( 'setting_per_page', '5' ) ),
                                    'category__in' => explode( ',', esc_html( get_theme_mod( 'setting_category_include' ) ) ),
                                    'category__not_in' => explode( ',', esc_html( get_theme_mod( 'setting_category_exclude') ) )
                                );
                                $postlist = new WP_Query( $args );

                                if( $postlist->have_posts() ):
                                    while( $postlist->have_posts() ) : $postlist->the_post();
                                        get_template_part( 'parts/content', 'latest-news');
                                    endwhile;
                                    wp_reset_postdata();
                                else: ?>
                                    <p><?php esc_html_e( 'Nothing yet to be displayed!', 'ht-affinity' ) ?></p>
                            <?php endif; ?>                                
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>