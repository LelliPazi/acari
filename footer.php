<footer id="page-footer" class="container">
    <div class="columns">
        <div class="col-3 animate fade-in-up">
            <ul class="social-links">
                <li>
                    <a href="https://twitter.com/VulcanGC" target="_blank" rel="nofollow">
                        <span class="icon-linkedin" aria-hidden="true"></span>
                        <span class="screen-reader-text">Folge uns auf Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/VulcanGC/" target="_blank" rel="nofollow">
                        <span class="icon-facebook" aria-hidden="true"></span>
                        <span class="screen-reader-text">Folge uns auf Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/vul_gc/" target="_blank" rel="nofollow">
                        <span class="icon-instagram" aria-hidden="true"></span>
                        <span class="screen-reader-text">Folge uns auf Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/" target="_blank" rel="nofollow">
                        <span class="icon-youtube" aria-hidden="true"></span>
                        <span class="screen-reader-text">Folge uns auf YouTube</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-3 animate fade-in-up">
            <span class="copyright">&copy; <?php bloginfo('name');?></span>
        </div>
        <div class="col-3 animate fade-in-up">
            <nav id="footer-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'nav-menu',
                    'depth' => 1,
                    'fallback_cb' => false
                )); ?>
            </nav>
        </div>
    </div>
</footer>
<div id="to-top" class="show">
    <a href="#page-header"><?php _e('Top');?></a>
</div>
<?php wp_footer();?>
</body>
</html>