<?php get_header(); ?>
<?php get_template_part('overlay'); ?>

	<main>
		<div class="main_top">
			<div class="accordion top--img" id="slide">
				<ul>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_kv_ballet-1.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_kv_event.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_kv_shopping.png" alt=""></li>
				</ul>
			</div>
			<div class="viewer">
				<ul>
				<li><a href="#1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_kv_vallet.png" alt=""></a></li>
				<li><a href="#2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_kv_event.png" alt=""></a></li>
				<li><a href="#3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_kv_shopping.png" alt=""></a></li>
				</ul>
			</div><!--/.viewer-->
		</div>
		<div class="container">
			<h1 class="important">心踊る体験を。</h1>
			<p class="catchcopy__p">
			性別で決められた役割ではなく、自分の思いのまま心が踊るような体験をして、彩り豊かな人生を送ってほしい。そういう願いを込めて活動しています。<br>
			活動を通じて、誰もが自分らしく表現できる世界、そして自分の思いを実現できる世界を目指します。
			</p>
			<div class="center">
				<a href="https://irodori-odori.com/about/" class="btn__about about__arrow">
					私たちについて
				</a>
			</div>
		</div>

		<div class="services">
			<div class="serviceslist">
				<h1>SERVICE</h1>
				<div class="ballet">
					<div class="service__img__top">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_ballet.png" alt="">
					</div>
					<div class="service__text">
						<h2 class="h2_yuminscho">あバレエレッスン</h2>
					<p>
					バレエが初めての方でも経験者でも、性別・ジェンダー問わずどなたでも参加大歓迎！<br>
					従来のバレエのように性別で役割を決めつけることはせず、自身の表現したいままに踊れるバレエレッスンです。
					</p>
					<a href="https://coubic.com/irodori_odori/718251" class="btn__service btn__arrow" id="target">詳しくみる</a>
					</div>
				</div>
				<hr>
				<div class="shopping">
					<div class="service__img__top">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_shopping.jpg" alt="">
					</div>
					<div class="service__text">
						<h2 class="h2_yuminscho">レディースファッション<br>買い物同行</h2>
					<p>
					レディースアイテムやコスメのショッピングに、トランス女性またはシス女性スタッフが同行します。<br>
					「レディースファッションを身に付けたい」というすべての方の「はじめの一歩」に寄り添います。
					</p>
					<a href="https://irodori-odori.com/ladies-shopping/" class="btn__service btn__arrow" id="target">詳しくみる</a>
					</div>
				</div>
				<hr>
				<div class="events">
					<div class="service__img__top">
						<img src="https://irodori-odori.com/wp-content/uploads/2021/08/top_event02.png" alt="">
					</div>
					<div class="service__text">
						<h2 class="h2_yuminscho">イベント開催</h2>
					<p>
					セミナーや交流会も開催しています。テーマはファッション・美容・労働など様々です。
					</p>
						<a href="https://irodori-odori.com/category/event_info/" class="btn__service btn__arrow arrow__hover" id="target">詳しくみる</a>
					</div>
				</div>
			</div>
		</div>

		<div class="news">
			<h1 class="important">NEWS</h1>
			<div class="top__news">	
				<?php query_posts("cat=3&showposts=4"); ?> 
				<?php while (have_posts()): the_post(); ?>

					<div class="top__news__list">
						<div class="top__news__dc">
							<p class="top__news__date"><?php the_time("Y.m.d"); ?></p>
							<p class="top__news__category"><?php the_category(); ?></p>
						</div>
						<p class="top__news__title"><a 
						href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
					</div>
					<?php endwhile; ?>
	
			</div>
			<?php get_template_part('contact_btn'); ?>
		</div>
	</main>
	<?php get_footer(); ?>