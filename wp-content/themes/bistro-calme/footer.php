<footer class="footer">
    <div class="container">
        <div class="footer_inner">
            <nav>
                <ul>
                <li><a href="#">HOME</a></li>
					<li><a href="#">PROFILE</a></li>
					<li><a href="#">PORTFOLIO</a></li>
					<li><a href="#">GitHub</a></li>
					<li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
            <div class="footer_copyright">
                <small>&copy; TatsuyaPortfolioSite All rights reserved.</small>
            </div>
        </div>
    </div>
</footer>

<!-- <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script> -->

<!-- トップページ以外はメインスライダーを表示させない -->
<?php
if(is_home()) {
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
    wp_enqueue_script('bistro-calme-home', get_template_directory_uri().'/assets/js/home.js');
}
?>
<?php wp_footer(); ?><!-- お約束 -->
</body>
</html>