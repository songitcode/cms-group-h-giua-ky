
<?php
if (post_password_required()) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option('show_avatars') ? 'show-avatars' : ''; ?>">

	<?php if (have_comments()) : ?>
		<h2 class="comments-title">
			<?php if ('1' === $twenty_twenty_one_comment_count) : ?>
				<?php esc_html_e('1 comment', 'twentytwentyone'); ?>
			<?php else : ?>
				<?php
				printf(
					esc_html(_nx('%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone')),
					esc_html(number_format_i18n($twenty_twenty_one_comment_count))
				);
				?>
			<?php endif; ?>
		</h2>

		<?php
		wp_list_comments(
			array(
				'avatar_size' => 60,
				'style' => 'ol',
				'short_ping' => true,
				'callback' => 'custom_comment_output'
			)
		);

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

		if (! comments_open()) : ?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'twentytwentyone'); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php if (is_user_logged_in()) : ?>
    <section class="card custom-width">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make a Comment</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                    <?php
                    comment_form(
                        array(
                            'title_reply'          => '',  // Removes default title
                            'label_submit'         => __('Share', 'twentytwentyone'),  // Button text changed to 'Share'
                            'comment_field'        => '<textarea id="comment" name="comment" rows="3" class="form-control" placeholder="What are you thinking..."></textarea>',
                            'class_submit'         => 'btn btn-info',
                            'comment_notes_before' => '',  // Removes "Required fields" message
                            'comment_notes_after'  => '',  // Removes additional notes after the comment field
                            'logged_in_as'         => '',  // Removes "Logged in as" message
                            'submit_button'        => '<button type="submit" class="btn btn-info float-right">Share</button>',  // Aligns "Share" button to the right
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <p class="login-prompt"><?php esc_html_e('Please log in to make a comment.', 'twentytwentyone'); ?></p>
<?php endif; ?>

</div>

<?php
function custom_comment_output($comment, $args, $depth) {
	?>
	<div class="container">
		<div class="row">
			<div class="media comment-box">
				<div class="media-left">
					<a href="#">
						<?php echo get_avatar($comment, 60); ?>
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><?php comment_author(); ?></h4>
					<?php comment_text(); ?>
					<?php
					comment_reply_link(
						array(
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>
