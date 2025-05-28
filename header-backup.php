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
	
	<header id="site_header" class="site_header">
		<?php if ( is_front_page() ) : ?>
			<div class="header_nav">
				<div class="container">
					<div class="header_nav_cover row">
						<div class="hnav_left ofmobile_767">
							<?php if ( is_front_page() ) : ?>
								<h1 class="site_logo"><?php the_custom_logo(); ?></h1>
							<?php else : ?>
								<p class="site_logo"><?php the_custom_logo(); ?></p>
							<?php endif; ?>
						</div>
						<div class="hnav_right displayflex">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header contact infos') ) : ?><?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div class="header_menu">
			<div class="container">
				<div class="header_menu_cover row">
					<div class="ortoc_logo">
						<?php if ( is_front_page() ) : ?>
							<h1 class="site_logo"><?php the_custom_logo(); ?></h1>
						<?php else : ?>
							<p class="site_logo"><?php the_custom_logo(); ?></p>
						<?php endif; ?>
					</div>
					<div class="menudusite">
						<?php

							wp_nav_menu(
								array(
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'theme_location' => 'primary',
									'menu_id'         => 'menu_ortoc',
									'menu_class'     => 'menu_ortoc',
								)
							);
						?>
					</div>
					
					<?php
                        /**
                            					<div class="hmenu_right displayflex">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Langues') ) : ?><?php endif; ?>
						<div class="seach_box">
							<div class="seach_icon"></div>
							<div class="seach_box_cover">
								<div class="seach_icon"></div>
								<?php get_search_form(); ?>
							</div>
						</div>
						<div class="menuicon"><span></span></div>
					</div>
                        */

                    ?>

				</div>
			</div>
		</div>
	</header><!-- #site-header -->

	<div id="site_content" class="site_content">
		<div id="primary" class="content-area">
			<main id="main" class="site_main">



