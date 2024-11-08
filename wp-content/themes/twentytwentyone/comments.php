<?php
if (post_password_required()) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option('show_avatars') ? 'show-avatars' : ''; ?>">

	<?php
	if (have_comments()) :
	?>
		<h2 class="comments-title">
			<?php if ('1' === $twenty_twenty_one_comment_count) : ?>
				<?php esc_html_e('1 comment', 'twentytwentyone'); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html(_nx('%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone')),
					esc_html(number_format_i18n($twenty_twenty_one_comment_count))
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__('Page', 'twentytwentyone') . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left'),
					esc_html__('Older comments', 'twentytwentyone')
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__('Newer comments', 'twentytwentyone'),
					is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right')
				),
			)
		);
		?>

		<?php if (! comments_open()) : ?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'twentytwentyone'); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php if (is_user_logged_in()) : ?>
		<!-- Replace comment form with Make a Post -->
		<section class="card">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make a Post</a>
					</li>
				</ul>
			</div>
			<div class="card-body">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
						<div class="form-group">
							<label class="sr-only" for="message">Post</label>
							<form action="" method="post">
								<textarea class="form-control" id="message" name="message" rows="3" placeholder="What are you thinking..."></textarea>
								<div class="text-right">
									<button type="submit" name="submit_post" class="btn btn-primary">Share</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Replace comment form with Make a Post -->
	<?php else : ?>
		<p class="login-prompt"><?php esc_html_e('Please log in to make a post.', 'twentytwentyone'); ?></p>
	<?php endif; ?>

</div><!-- #comments -->

<?php
// Xử lý khi người dùng nhấn "Share"
if (isset($_POST['submit_post'])) {
	// Lấy nội dung từ textarea
	$post_content = sanitize_text_field($_POST['message']);

	// Kiểm tra nội dung không trống
	if (! empty($post_content)) {
		// Tạo bài viết mới
		$new_post = array(
			'post_title'   => 'New Post from ' . wp_get_current_user()->display_name,
			'post_content' => $post_content,
			'post_status'  => 'publish',
			'post_author'  => get_current_user_id(),
			'post_type'    => 'post',
		);

		// Insert bài viết vào cơ sở dữ liệu
		wp_insert_post($new_post);
	}
}
?>