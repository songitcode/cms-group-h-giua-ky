<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header id="site-header" class="header-footer-group">
		<div class="container-fluid">
			<div class="row align-items-center py-1">
				<!-- Site Logo and Home -->
				<div class="col-md-3 d-flex align-items-center">
					<?php
					echo '<h1 class="site-title ml-3">Group H</h1>';
					echo '<h1 class="site-title ml-2 home-item"><a href="' . esc_url(home_url('/')) . '">Home</a></h1>';
					?>
				</div>

				<!-- Search Form with smaller left margin to bring it closer to "Home" -->
				<div class="col-md-3 d-flex justify-content-start">
					<form class="form-inline my-2 my-lg-0" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="search">
						<input class="search-input form-control mr-sm-2" type="search" placeholder="<?php esc_attr_e('Search', 'text-domain'); ?>" name="s" aria-label="<?php esc_attr_e('Search', 'text-domain'); ?>">
						<button class="btn-search btn my-2 my-sm-0 bg-white text-dark border" type="submit"><?php esc_html_e('Submit', 'text-domain'); ?></button>
					</form>
				</div>

				<!-- Navigation Links -->
				<div class="col-md-4">
					<nav class="nav text-dark">
						<?php
						// Display the list of categories with custom classes
						wp_list_categories([
							'title_li' => '', // Remove the default title
							'style' => 'list', // Use list format for categories
							'separator' => '', // Add a separator for navigation links if needed
							'walker' => new Walker_Category_Nav_Link() // Custom walker for <a> and 'nav-link' class
						]);
						?>
					</nav>
				</div>

				<!-- Menu Links -->
				<div class="col-md-1 text-center menu-item">
					<a href="<?php echo get_category_link(get_option('default_category')); ?>" class="nav-link text-dark">
						<div class="icon-circle text-dark mb-1 d-flex align-items-center justify-content-center">
							<i class="fa fa-ellipsis-h fa-2x"></i>
						</div>
						<span class="medium">Menu</span>
					</a>
				</div>

				<!-- Search Links -->
				<div class="col-md-1 d-flex justify-content-start search-item">
					<a href="<?php echo esc_url(home_url('/search-page/')); ?>" class="btn-search btn my-1 my-sm-0 d-flex flex-column align-items-center">
						<i class="fa fa-search fa-2x mb-2"></i>
						<?php esc_html_e('Search', 'text-domain'); ?>
					</a>
				</div>

				<!-- User Account Dropdown -->
				<div class="col-md-1 text-center user-account">
					<div class="dropdown">
						<a href="#" class="nav-link dropdown-toggle text-dark d-flex flex-column align-items-center" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user-circle fa-2x"></i>
							<span>Account</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
							<a class="dropdown-item" href="#">Profile</a>
							<a class="dropdown-item" href="#">Settings</a>
							<a class="dropdown-item" href="#">Logout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php
	$enable_header_search = get_theme_mod('enable_header_search', true);
	// Output the search modal (if it is activated in the customizer).
	if ($enable_header_search) {
		get_template_part('template-parts/modal-search');
	}
	?>

</body>

</html>