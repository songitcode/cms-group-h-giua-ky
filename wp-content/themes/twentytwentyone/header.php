<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" id="header-css" href="http://yourdomain.com/wp-content/themes/twentytwentyone/header.css" type="text/css" media="all">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header id="site-header" class="header-footer-group">
		<div class="container-fluid">
			<div class="row align-items-center py-3">
				<!-- Site Logo and Home -->
				<div class="col-md-3 d-flex align-items-center">
					<?php
					// Correct method to display the site logo
					if (function_exists('the_custom_logo') && has_custom_logo()) {
						the_custom_logo();
					} else {
						// Display "Group H" and "Home" next to each other
						echo '<h1 class="site-title mr-3">Group H</h1>';
						echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">Home</a></h1>';
					}
					?>
				</div>

				<!-- Search Form with smaller left margin to bring it closer to "Home" -->
				<div class="col-md-4 d-flex justify-content-start ml-1">
					<form class="form-inline my-2 my-lg-0" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="search">
						<input class="search-input form-control mr-sm-2" type="search" placeholder="<?php esc_attr_e('Search', 'text-domain'); ?>" name="s" aria-label="<?php esc_attr_e('Search', 'text-domain'); ?>">
						<button class="btn-search btn btn-outline-success my-2 my-sm-0" type="submit"><?php esc_html_e('Search', 'text-domain'); ?></button>
					</form>
				</div>

				<!-- Navigation Links -->
				<div class="col-md-3">
					<nav class="nav">
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

				<!-- User Account Dropdown -->
				<div class="col-md-1 text-center">
					<div class="dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="user-icon"><i class="fa fa-2x fa-user-circle"></i></span>
							<span><?php esc_html_e('Account', 'text-domain'); ?></span>
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
