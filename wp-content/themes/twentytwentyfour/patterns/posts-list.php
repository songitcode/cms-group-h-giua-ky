<?php
/**
 * Title: List of posts without images, 1 column
 * Slug: twentytwentyfour/posts-list
 * Categories: query, posts
 * Block Types: core/query
 * Description: A list of posts without images, 1 column.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"
		style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);line-height:1">
		<?php esc_html_e('Latest News', 'twentytwentyfour'); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<ul class="timeline tim-thay" style="margin-left: 0px !important">
			<?php
			// Tạo đối tượng WP_Query để truy vấn các bài viết mới nhất
			$latest_posts = new WP_Query(array(
				'posts_per_page' => 5, // Số lượng bài viết muốn hiển thị
				'post_status' => 'publish' // Chỉ lấy bài viết đã được xuất bản
			));

			// Kiểm tra nếu có bài viết
			if ($latest_posts->have_posts()):
				while ($latest_posts->have_posts()):
					$latest_posts->the_post(); ?>
					<li>
						<a target="_blank" href="<?php the_permalink(); ?>">
							<?php the_title(); // Hiển thị tiêu đề bài viết ?>
						</a>
						<a href="#" class="float-right"><?php echo get_the_date(); // Hiển thị ngày đăng ?></a>
						<p><?php the_excerpt(); // Hiển thị đoạn trích ngắn ?></p>
					</li>
				<?php endwhile;
				wp_reset_postdata(); // Đặt lại dữ liệu bài viết
			else: ?>
				<li><?php _e('No posts found.', 'textdomain'); ?></li>
			<?php endif; ?>
		</ul>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->