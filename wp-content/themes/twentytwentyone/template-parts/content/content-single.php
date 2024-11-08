<style>
	body {
		font-size: 16px;
		/* Tăng kích thước chữ của toàn bộ body */
		font-family: 'Open Sans', sans-serif;
		background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
	}

	.entry-title {
		font-size: 40px !important;
		/* Tăng kích thước chữ của tiêu đề */
		font-weight: bold !important;
	}

	.detail .entry-title {
		border: none;
		margin-top: 45px;
	}

	.overviewline {
		border-bottom: 1px solid #cecece;
		margin: 25px 0 15px;
		position: relative;
	}

	.headlinesdate {
		background: #f5ce31;
		border-radius: 50%;
		padding: 10px 17px;
		box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
	}

	.headlinesdate .headlinesdm,
	.news>.headlines .headlinesdate,
	.headlinesdate {
		float: left;
		font-family: 'Prata', serif;
	}

	.headlinesdate .headlinesyear {
		line-height: 3.5em;
		float: left;
		margin-left: 3px;
	}

	.detail .overview {
		font-size: 18px;
		/* Tăng kích thước chữ của phần overview */
		font-style: italic;
		margin: 15px 0;
		text-align: justify;
	}

	.col-md-6 {
		background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
	}

	.headlinesday {
		border-bottom: 1px solid #000;
	}

	.detail .maincontent {
		font-size: 18px;
		/* Tăng kích thước chữ của phần maincontent */
		margin: 20px 0;
		text-align: justify;
		line-height: 1.7em;
	}

	.list-group {
		list-style: disc;
		margin-bottom: 0;
	}

	.list-group-item {
		border: none !important;
		border-bottom: 2px #d9d9d9 solid !important;
		margin-bottom: 0;
		padding-left: 0;
		padding-right: 0;
		margin: 0 15px;
	}

	.list-group-item:before {
		font-family: Arial, Helvetica, sans-serif;
		color: #f5ce31;
		content: "\2022";
		font-size: 2.5em;
		/* Tăng kích thước chấm bullet */
		padding-right: 0.5em;
		position: relative;
		top: 0.15em;
	}

	.list-group-item:last-child {
		border: none;
	}

	.list_news .headlines {
		background: #fff;
	}

	.headlines {
		background: #56bdbf;
		overflow: hidden;
		padding: 20px 30px;
	}

	.headlines ul {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.headlines ul>li {
		overflow: hidden;
		display: table;
		margin-bottom: 5px;
		width: 100%;
	}

	.headlines .headlinesdates {
		font-size: 1em;
		/* Tăng kích thước chữ của ngày tháng */
		width: 15%;
		min-width: 55px;
		display: table-cell;
		vertical-align: middle;
	}

	.headlinesdates .headlinesdms,
	.news>.headlines .headlinesdates,
	.headlinesdates {
		float: left;
		font-family: 'Prata', serif;
	}

	.headlinesdates .headlinesday {
		border-bottom: 1px solid #fff;
	}

	.headlinesdates .headlinesdays,
	.news>.headlines .headlinesmonths {
		line-height: 1.7em;
	}

	.headlinesdates .headlinesyears {
		line-height: 3.5em;
		float: left;
		margin-left: 3px;
	}

	.headlines ul>li>.headlinestitles {
		display: table-cell;
		vertical-align: middle;
		width: 95%;
	}

	.list_news .headlines a {
		color: #000;
	}

	.row {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.container-fluid {
		display: flex;
		justify-content: center;
		flex-direction: column;
	}

	/* Recent Post CSS */
	.view-all-news a:hover {
		color: #fff;
	}

	.view-all-news a {
		color: #fff;
		font-size: 16px;
		font-weight: bold;
	}

	.view-all-news {
		width: 100%;
		background: #62C6C8;
		display: flex;
		justify-content: center;
		padding: 15px;
	}

	.custom-headlines {
		background-color: #56BDBF;
		padding: 10px;
		font-family: Arial, sans-serif;
		color: white;
	}

	.custom-headlines-list {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.custom-headlines-item {
		display: flex;
		align-items: center;

		padding: 10px 0;
	}

	.custom-headlines-date {
		display: flex;
		align-items: center;
		margin-right: 15px;
		text-align: center;

		color: white;
	}

	.custom-headlines-dm {

		padding: 5px;
		border-radius: 3px;
	}

	.custom-headlines-day {
		font-size: 15px;
		font-weight: 500;
		border-bottom: 1px solid rgba(255, 255, 255, 0.7);
	}

	.custom-headlines-month {
		font-size: 15px;
		font-weight: 500;
	}

	.custom-headlines-year {
		font-size: 14px;
		color: #fff;
		margin-top: 5px;
		font-weight: 500;
	}

	.custom-headlines-title a {
		color: white;
		text-decoration: none;
		font-size: 14px;
		line-height: 1.5;
		transition: color 0.3s;
	}

	.custom-headlines-title a:hover {
		color: #ffeb3b;
		/* Màu chữ khi hover */
	}

	.custom-headlines-item:last-child {
		border-bottom: none;
		/* Bỏ đường gạch ngang cuối cùng */
	}
</style>

<body>

	<div class="container-fluid post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-6">
				<div class="row title">
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="overviewline"></div>
					</div>
				</div>
				<div class="row maincontent">
					<div class="col-md-12">
						<?php
						the_content();
						wp_link_pages(
							array(
								'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
								'after' => '</nav>',
								/* translators: %: Page number. */
								'pagelink' => esc_html__('Page %', 'twentytwentyone'),
							)
						);
						?>

					</div>
				</div>

			</div>
			<!-- Recent Post -->
			<div class="col-md-3">
				<div class="recent-posts-container">
					<?php
					$recent_posts = wp_get_recent_posts([
						'numberposts' => 4, // Số lượng bài viết muốn hiển thị
						'post_status' => 'publish'
					]);
					foreach ($recent_posts as $post):
						?>
						<div class="recent-post">
							<div class="custom-headlines">
								<ul class="custom-headlines-list">
									<li class="custom-headlines-item">
										<div class="custom-headlines-date">
											<div class="custom-headlines-dm">
												<div class="custom-headlines-day">
													<?php echo get_the_date('d', $post['ID']); ?>
												</div>
												<div class="custom-headlines-month">
													<?php echo get_the_date('m', $post['ID']); ?>
												</div>
											</div>
											<div class="custom-headlines-year"><?php echo get_the_date('y', $post['ID']); ?>
											</div>
										</div>
										<div class="custom-headlines-title">
											<a href="<?php echo get_permalink($post['ID']); ?>">
												<?php echo $post['post_title']; ?>
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					<?php endforeach;
					wp_reset_query(); ?>
					<div class="view-all-news">
						<?php
						$page_for_posts = get_option('page_for_posts');
						if ($page_for_posts) {
							echo '<a href="' . get_permalink($page_for_posts) . '">Xem tất cả tin tức</a>';
						} else {
							echo '<a href="' . site_url('/blog') . '">Xem tất cả tin tức</a>';
						}
						?>

					</div>
				</div>

			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<?php
				// Include WordPress bootstrap
				require('wp-load.php');

				// Truy vấn cơ sở dữ liệu để lấy thông tin bài viết
				$query = new WP_Query(array('post_type' => 'post'));

				// Kiểm tra xem có bài viết nào không
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
						$post_title = get_the_title(); // Lấy tên bài viết
						$post_date = get_the_date(); // Lấy thời gian đăng bài viết
						?>

						<div class="list_news">
							<div class="headlines">
								<ul>
									<li>
										<div class="headlinesdates">
											<div class="headlinesdms">
												<div class="headlinesdays"><?php echo $post_date = get_the_date('d'); ?></div>
												<div class="headlinesmonths"><?php echo $post_date = get_the_date('m'); ?></div>
											</div>
											<div class="headlinesyears"><?php echo $post_date = get_the_date('y'); ?></div>
										</div>
										<div class="headlinestitles">
											<a href="<?php the_permalink(); ?>"><?php echo $post_title; ?></a>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<?php
					}
				}
				?>
			</div>
		</div>
</body>

</html>