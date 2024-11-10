<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<style>
	.page-header {
		border: none !important;
		margin-bottom: 0px !important;
		padding-bottom: 30px !important;
	}

	.page-title {
		text-align: center;
		font-size: 50px !important;
		color: black;
		font-weight: 700 !important;
	}

	.page-content {
		margin-top: 0px !important;

	}


	.page-title:before {
		content: "Search:";
		color: red;
	}
</style>
<section class="no-results not-found">
	<header class="page-header alignwide">
		<?php if (is_search()): ?>
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: Search term. */
					esc_html__('"%s"', 'twentytwentyone'),
					'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
				);
				?>
			</h1>

		<?php else: ?>

			<h1 class="page-title"><?php esc_html_e('Nothing here', 'twentytwentyone'); ?></h1>

		<?php endif; ?>
	</header><!-- .page-header -->

	<div class="page-content">

		<?php if (is_home() && current_user_can('publish_posts')): ?>

			<?php
			printf(
				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);
			?>

		<?php elseif (is_search()): ?>

			<p style="text-align: center" class="default-max-width">
				<?php esc_html_e('We could not find any result for your search. You can give it another try through the search form below', 'twentytwentyone'); ?>
			</p>
			<?php get_search_form(); ?>

		<?php else: ?>

			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone'); ?>
			</p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->