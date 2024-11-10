<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwentyone_unique_id = wp_unique_id('search-form-');

$twentytwentyone_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
?>


<?php
/**
 * Title: Search
 * Slug: twentytwentyfour/hidden-search
 * Inserter: no
 */
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
	integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- <form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form"
	action="<?php echo esc_url(home_url('/')); ?>">
	<label
		for="<?php echo esc_attr($twentytwentyone_unique_id); ?>"><?php _e('Search&hellip;', 'twentytwentyone'); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>
	<input type="search" id="<?php echo esc_attr($twentytwentyone_unique_id); ?>" class="search-field"
		value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" class="search-submit"
		value="<?php echo esc_attr_x('Search', 'submit button', 'twentytwentyone'); ?>" />
</form> -->

<div class="box">
	<form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get"
		action="<?php echo esc_url(home_url('/')); ?>" class="search-form">
		<div class="search-row">
			<div class="search-col">
				<form class="search-card">
					<div class="search-card-body">
						<div class="search-icon">
							<i class="fas fa-search"></i>
						</div>
						<div class="search-input-col">
							<input type="search" id="<?php echo esc_attr($twentytwentyone_unique_id); ?>"
								placeholder="<?php echo esc_attr_x('Search topics or keywords', 'placeholder', 'twentytwentyone'); ?>"
								class="search-input" value="<?php echo get_search_query(); ?>" name="s" />
						</div>
						<div class="search-btn-col">
							<button type="submit" class="search-btn"
								value="<?php echo esc_attr_x('Search', 'submit button', 'twentytwentyone'); ?>"><?php echo esc_html_x('Search', 'submit button', 'twentytwentyone'); ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</form>
</div>

<style>
	.box {
		display: flex;
		align-items: center;
		justify-content: center;
		background-color: #f5efe0;
		padding: 30px 0px 50px 0px;
	}

	.search-form {
		margin: 0;
		width: 50%;
	}

	.search-row {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		padding: 20px;
		border: 1px solid #ccc;
		border-radius: 8px;
		background-color: #fff;
	}

	.search-col {
		width: 100%;
		max-width: 800px;
		padding: 0 15px;
	}

	.search-card {
		display: flex;
		flex-direction: row;

		overflow: hidden;
	}

	.search-card-body {
		display: flex;
		align-items: center;
		width: 100%;
	}

	.search-icon {
		font-size: 1.5rem;
		color: #6c757d;
	}

	.search-input-col {
		flex-grow: 1;
	}

	.search-input {
		width: 100%;
		padding: 12px;
		border: none;
		outline: none;
		font-size: 1rem;
		border-radius: 4px;

	}

	.search-input:focus {
		border-color: #28a745;
		border: 1px solid #ccc;
		outline-style: none !important;
	}

	.search-btn {
		background-color: #28a745 !important;
		color: white;
		border: none;
		padding: 12px 20px;
		font-size: 1rem;
		cursor: pointer;
		border-radius: 4px;
	}

	.search-btn:hover {
		background-color: #218838;
	}
</style>