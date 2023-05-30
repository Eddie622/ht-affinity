            <footer class="site-footer">
                <div class="container">
                    <div class="copyright">
                        <p><?php echo esc_html( get_theme_mod( 'setting_copyright', __( 'Copyright X - All rights Reserved', 'ht-affinity' ) ) ); ?></p>
                    </div>
                    <nav class="footer-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'htaffinity_footer_menu', 'depth' => 1 ) ); ?>
                    </nav>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>