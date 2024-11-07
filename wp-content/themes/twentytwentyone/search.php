<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
	crossorigin="anonymous"></script>

<style>
	body {
		font-family: 'Open Sans', sans-serif;
	}

	.topnewstime .topnewsmonth {
		text-transform: uppercase;
		font-size: 1em;
		color: #666 !important;

	}

	.list_new_view {
		margin-bottom: 20px;
		padding: 15px;
		background: #fff;
		box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		border-radius: 8px;
	}

	.abc {
		color: #428bca;
		text-decoration: none;
	}

	.top_news_block_thumb img {
		width: 100%;
		height: 250px !important;
		object-fit: cover;
		border-radius: 8px;
	}

	.top_news_block_desc {
		font-size: 0.9em;
		padding: 15px;
	}

	.topnewstime .topnewsdate {
		font-family: 'Prata', serif;
		font-size: 3em;
		line-height: 1;
		color: #333;
	}

	.top_news_block_desc h4 {
		text-transform: uppercase;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: bold;
		font-size: 18px;
	}

	.shortdesc {
		border-left: 1px solid #666;
		padding-left: 10px;
	}

	.top_news_block_desc p {
		font-size: 0.85em;
		color: #555;
	}
</style>

<?php
$months = array(
	'January' => 'Tháng 1',
	'February' => 'Tháng 2',
	'March' => 'Tháng 3',
	'April' => 'Tháng 4',
	'May' => 'Tháng 5',
	'June' => 'Tháng 6',
	'July' => 'Tháng 7',
	'August' => 'Tháng 8',
	'September' => 'Tháng 9',
	'October' => 'Tháng 10',
	'November' => 'Tháng 11',
	'December' => 'Tháng 12',
);
get_header();

if (have_posts()) {
	?>
	<div class="container">
		<header class="page-header alignwide">
			<h1 class="page-title">
				<?php printf(esc_html__('Results for "%s"', 'twentytwentyone'), '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'); ?>
			</h1>
		</header>

		<?php
		while (have_posts()) {
			the_post();
			?>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="list_new_view">
						<div class="row">
							<div class="col-md-5">
								<div class="top_news_block_thumb">
									<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail('medium', ['class' => 'img-responsive']);
									}
									?>
								</div>
							</div>
							<div class="col-md-7 top_news_block_desc">
								<div class="row">
									<div class="col-md-4 topnewstime">
										<span class="topnewsdate"><?php echo get_the_time('d'); ?></span><br>
										<span class="topnewsmonth"><?php echo get_the_time('F'); ?></span>
										<br>
									</div>
									<div class="col-md-8 shortdesc">
										<h4 class="h4">
											<a class="abc" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h4>
										<p>
											<?php
											$excerpt = get_the_excerpt();
											$excerpt = wp_trim_words($excerpt, 30, '.');
											echo $excerpt;
											?>
											<a class="abc" href="<?php the_permalink(); ?>">[...]</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>

		<?php
		twenty_twenty_one_the_posts_navigation();
		?>

	</div>

	<?php
} else {
	get_template_part('template-parts/content/content-none');
}

get_footer();
?>