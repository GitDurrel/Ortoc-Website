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
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="page">
	
	<?php // ORTOC Nouvelle Navbar Responsive ?>
	<header class="ortoc-navbar">
		<div class="ortoc-navbar-logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<?php if (has_custom_logo()) {
					the_custom_logo();
				} else {
					bloginfo('name');
				} ?>
			</a>
		</div>
		<nav class="ortoc-navbar-menu">
			<a class="ortoc-navbar-open-btn" href="#"><i class="ion-navicon-round"></i></a>
			<div class="ortoc-navbar-offcanvas">
				<a class="ortoc-navbar-close-btn" href="#"><i class="ion-close-round"></i></a>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary', // Specifies the menu location registered in functions.php
					'menu_class'     => 'ortoc-navbar-list', // Adds a class to the <ul> element
					'container'      => false, // Prevents wrapping the ul with a div
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Ensures it's a ul
				));
				?>
			</div>
		</nav>
	</header>
	<?php // /ORTOC Nouvelle Navbar Responsive ?>

	<div id="site_content" class="site_content">
		<div id="primary" class="content-area">
			<main id="main" class="site_main">

<script>
// Wait for the DOM to be fully loaded before running the script
document.addEventListener('DOMContentLoaded', function() {
  // Get references to the open button, close button, and the off-canvas menu
  const openBtn = document.querySelector('.ortoc-navbar-open-btn');
  const closeBtn = document.querySelector('.ortoc-navbar-close-btn');
  const offcanvasMenu = document.querySelector('.ortoc-navbar-offcanvas');

  // Check if all necessary elements are present on the page
  if (openBtn && closeBtn && offcanvasMenu) {
    // Event listener for the open button
    openBtn.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent the default anchor tag behavior
      offcanvasMenu.classList.add('active'); // Add 'active' class to show the menu
    });

    // Event listener for the close button
    closeBtn.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent the default anchor tag behavior
      offcanvasMenu.classList.remove('active'); // Remove 'active' class to hide the menu
    });
  }
});
</script>
<?php // The HTML comment "<!-- /ORTOC Nouvelle Navbar Responsive -->" was here, replaced by PHP comments or removed if redundant ?>



