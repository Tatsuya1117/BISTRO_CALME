<!-- ヘッダーは「header.php」にて管理 -->
<?php get_header(); ?>

	<!-- メインスライダー -->
	<!-- トップページ以外はメインスライダーを表示させない -->
	<?php if(is_home()): ?>
	<div class="jumbotron">
		<div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-1@2x.jpg')"></div>
		<div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-2@2x.jpg')"></div>
		<div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-3@2x.jpg')"></div>
	</div>
	<?php endif; ?>

	<section class="sec">
		<div class="container">
			<header class="sec_header">
				<h2 class="title">PORTFOLIO<span>ポートフォリオ</span></h2>
			</header>

			<div class="row">
				<div class="col-md-4">
					<article class="news">
						<div class="news_pic">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-1.jpg" alt="">
							</a>
						</div>
						<div class="news_meta">
							<ul class="post-categories">
								<li><a href="#">case:00</a></li>
							</ul>
							<time class="news_time" datetime="2019-00-00">2019年00月00日</time>
						</div>
						<h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
						<div class="news_desc">
							<p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
							<p><a href="#">[詳しく見る]</a></p>
						</div>
					</article>
				</div>

				<div class="col-md-4">
					<article class="news">
						<div class="news_pic">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-2.jpg" alt="">
							</a>
						</div>
						<div class="news_meta">
							<ul class="post-categories">
								<li><a href="#">case:01</a></li>
							</ul>
							<time class="news_time" datetime="2019-00-00">2019年00月00日</time>
						</div>
						<h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
						<div class="news_desc">
							<p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
							<p><a href="#">[詳しく見る]</a></p>
						</div>
					</article>
				</div>

				<div class="col-md-4">
					<article class="news">
						<div class="news_pic">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3.jpg" alt="">
							</a>
						</div>
						<div class="news_meta">
							<ul class="post-categories">
								<li><a href="#">case:02</a></li>
							</ul>
							<time class="news_time" datetime="2019-00-00">2019年00月00日</time>
						</div>
						<h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
						<div class="news_desc">
							<p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
							<p><a href="#">[詳しく見る]</a></p>
						</div>
					</article>
				</div>
			</div>

			<p class="sec_btn">
				<a href="" class="btn btn-default">PORTFOLIO LIST<i class="fas fa-angle-right"></i></a>
			</p>

		</div>
	</section>

	<section class="sec bg-gray">
		<div class="container">
			<header class="sec_header">
				<h2 class="title">その他<span>OTHERS</span></h2>
			</header>

			<div class="row">
				<div class="col-md-6">
					<a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/bnr_about@2x.jpg')">
						<div class="bnr_inner">
							PROFILE<span>プロフィール</span>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/bnr_access@2x.jpg')">
						<div class="bnr_inner">
							GitHub<span>ギットハブ</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="sec sec-bg">
		<div class="sec_inner">
			<header class="sec_header">
				<h2 class="title">CONTACT<span>お問い合わせ</span></h2>
			</header>

			<div class="sec_body contact">
				<div class="contact_icon">
					<i class="fas fa-phone"></i>
				</div>
				<div class="contact_body">
					<p>
						お気軽にご相談ください。
						<span>080-4464-3515</span>
					</p>
				</div>
			</div>

			<div class="sec_btn">
				<a href="" class="btn btn-default">お問い合わせフォームはこちらから！<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</section>

	<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>
<!-- フッターは「footer.php」にて管理 -->
<?php get_footer(); ?>