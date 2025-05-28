<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<footer id="site_footer" class="site_footer">
	<div class="container">
		<div class="site_footer_content">

			<div class="footer_bottom row">
				<div class="fb_left displayflex">
					<div class="logo_footer displayflex">
						<img alt="Logo ORTOC" src="/wp-content/uploads/2023/07/cropped-LOGO-ORTOC-remix-conseil-regional-ouest_.jpg" STYLE="width: 26px; height: 33px;">
						<?php _e('Ortoc', 'ortoc'); ?>
					</div>
					<div class="copyright">
						<?php _e('Copyright © 2022 ORTOC,  All rights reserved', 'ortoc'); ?>
					</div>
				</div>
				<div class="fb_right displayflex">
					<?php _e('Visitez-nous', 'ortoc'); ?>
					<ul class="rslink nostyle displayflex">
						<li><a href="https://tourismeouestcameroun.com/" title="facebook"><img alt="facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg')"></a></li>
						<li><a href="https://tourismeouestcameroun.com/" title="twitter"><img alt="twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg')"></a></li>
						<li><a href="https://tourismeouestcameroun.com/" title="linkedin"><img alt="linkedin" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.svg')"></a></li>
					</ul>
					<!-- Placeholder for phone number -->
					<div class="phone_footer">
						<a href="tel:+YOUR_PHONE_NUMBER"><?php _e('+', 'ortoc'); ?> YOUR_PHONE_NUMBER</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- bouton de retour en haut de page -->
	<div class="back-to-top"></div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php
/**
    
<script type="text/javascript">
	jQuery(document).ready(function(){

		var header_nav = jQuery('#site_header .header_nav').outerHeight();

		
		jQuery(window).scroll(function() {
		  	if( jQuery(this).scrollTop() > 1 ) {
		    	jQuery('body').addClass('sticky');
		    	jQuery("#site_content").css({"padding-top": header_nav});
		  	} else {
		    	jQuery('body').removeClass('sticky');
		    	jQuery("#site_content").css({"padding-top": 0});
		  	}
		  	if( jQuery(this).scrollTop() > header_nav ) {
		    	jQuery('body.home').addClass('stickyhome');
		  	} else {
		    	jQuery('body').removeClass('stickyhome');
		  	}
		});

		jQuery(window).resize(function(){
		   	var header_nav = jQuery('#site_header .header_nav').outerHeight();
			jQuery("#site_content").css({"padding-top": header_nav}); 
		});

		jQuery('.icon_search').click(function(e){
		   	jQuery(this).next('#searchbox').slideToggle();
		});

		jQuery('.menuicon').click(function(e){
			if (jQuery('.menuicon').hasClass('active')) {
		   		jQuery('.menuicon').removeClass('active');
		   	}else{
		   		jQuery('.menuicon').addClass('active');
		   	}
		   	jQuery(this).parents('.header_menu').find('.menudusite').toggleClass('open');
		});

		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function () {
		    if (jQuery(this).scrollTop() > offset) {
		        jQuery('.back-to-top').fadeIn(duration);
		    } else {
		        jQuery('.back-to-top').fadeOut(duration);
		    }
		});

		jQuery('.back-to-top').click(function (event) {
		    event.preventDefault();
		    jQuery('html, body').animate({scrollTop: 0}, duration);
		    return false;
		});

		jQuery('.seach_icon').click(function (event) {
		    jQuery(this).parents('.seach_box').find('.seach_box_cover').slideToggle();
		});

		$('.list_sites_naturels').slick({
	        infinite: false,
	        swipeToSlide: true,
	        touchMove: true,
	        dots: false,
	        arrows: true,
	        slidesToShow: 5,
	        slidesToScroll: 1,
	        prevArrow: $(".custom_slick_prev"),
	        nextArrow: $(".custom_slick_next"),
	        responsive: [
	          {
	            breakpoint: 991,
	            settings: {
	              slidesToShow: 4
	            }
	          },
	          {
	            breakpoint: 767,
	            settings: {
	              slidesToShow: 3
	            }
	          },
	          {
	            breakpoint: 575,
	            settings: {
	              slidesToShow: 2
	            }
	          }
	        ]
	    });

		$('.slider_produits').slick({
	        centerMode: true,
            infinite: true,
            centerPadding: '150px',
	        swipeToSlide: true,
	        touchMove: true,
	        dots: true,
	        arrows: false,
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        responsive: [
	          {
	            breakpoint: 767,
	            settings: {
	            	centerPadding: '70px',
	              	slidesToShow: 2
	            }
	          },
	          {
	            breakpoint: 575,
	            settings: {
	            	centerPadding: '100px',
	              	slidesToShow: 1
	            }
	          },
	          {
	            breakpoint: 480,
	            settings: {
	            	centerPadding: '40px',
	              	slidesToShow: 1
	            }
	          }
	        ]
	    });

		$('.testimonials_slider').slick({
	        swipeToSlide: true,
	        touchMove: true,
	        dots: true,
	        arrows: false,
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        responsive: [
	          {
	            breakpoint: 767,
	            settings: {
	              slidesToShow: 2
	            }
	          },
	          {
	            breakpoint: 575,
	            settings: {
	              slidesToShow: 1
	            }
	          }
	        ]
	    });

	    $('.testimo_slider').slick({
	        infinite: false,
	        swipeToSlide: true,
	        touchMove: true,
	        dots: false,
	        arrows: true,
	        slidesToShow: 1,
	        slidesToScroll: 1
	    });

	    $('.slick_custom_dots').slick({
	        dots: true,
		    	customPaging: function(slider, i) { 
		        return '<button class="tab">' + $(slider.$slides[i]).find(".tab_content_item").attr('data-nav-title') + '</button>';
		    },
		    arrows: false,
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    fade: true
	    });
        const $datepicker = $('.datepicker');
        if(!$datepicker.data('datepicker')){
    	    $(".datepicker").datepicker({ 
    	        autoclose: false, 
    	        todayHighlight: true
    	  	}).on('change', function(){
    	        $('.datepicker_field .datepicker').hide();
    	    }).datepicker('update', new Date());
        }


	    
		// bind filter button click
		$(".posts_filters").on("click", "button", function () {
		  var filterValue = $(this).attr("data-filter");
		  $('.postitem').hide();
		  $('.postitem'+filterValue).show();
		  //$grid.isotope({ filter: filterValue });
		});

		// change _is-checked class on buttons
		$(".posts_filters").each(function (i, buttonGroup) {
		  var $buttonGroup = $(buttonGroup);
		  $buttonGroup.on("click", "button", function () {
		    $buttonGroup.find(".checked").removeClass("checked");	
		    $(this).addClass("checked");
		  });
		});

		$("input[type=file]").change(function (e) {
		  	$(this).parents(".custom_uploadfile").find(".custom_file_label").text(e.target.files[0].name);
		});


		$('.qty_button').off('click').on('click', function () {
		  	if ($(this).hasClass('qty_plus')) {
		    	var addValue = parseInt($(this).parent().find('input').val()) + 1;
				$(this).parent().find('input').val(addValue).trigger('change');
			}
			if ($(this).hasClass('qty_minus')) {
		    	var removeValue = parseInt($(this).parent().find('input').val()) - 1;
				if( removeValue == 0 ) {
		      		removeValue = 1;
				}
				$(this).parent().find('input').val(removeValue).trigger('change');
			}
		});
		$('.custom_qtyfield input').off('change').on('change', function() {
		  	console.log($(this).val());
		});



		$(".menu_ortoc li").hover(function() {
		  	var isHovered = $(this).is(":hover");
		  	if (isHovered) {
			  	$(this).children(".sub-menu").stop().slideDown(300);
		  	} else {
		    	$(this).children(".sub-menu").stop().slideUp(300);
	  		}
		});

		$('[data-fancybox="images"]').fancybox({
			buttons : [ 
				'slideShow',
				'zoom',
				'fullScreen',
				'close'
			]
		});

		$(window).on('load', function(){
		    function gridMasonry(){
		        var grid = $(".galerie_list")
		        if( grid.length ){
		            
		          grid.isotope({
		            itemSelector: '.gal_item',
		            percentPosition: true,
		            layoutMode: 'masonry',
		            masonry: {
		              columnWidth: '.grid-sizer',
		            },
		          });
		            
		        }
		    }
		    gridMasonry();
		});
		
	})
</script>
 */

?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		// === Ton code intégré ici ===
		// Sticky header
		const stickyClass = 'sticky';
		window.addEventListener('scroll', function() {
			if (window.scrollY > 50) {
				document.body.classList.add(stickyClass);
			} else {
				document.body.classList.remove(stickyClass);
			}
		});
		if (window.scrollY > 50) {
			document.body.classList.add(stickyClass);
		}

		// Toggle menu mobile
		const menuIcon = document.querySelector('.menuicon');
		const menuSite = document.querySelector('.menudusite');
		if (menuIcon && menuSite) {
			menuIcon.addEventListener('click', function(e) {
				e.stopPropagation();
				this.classList.toggle('active');
				menuSite.classList.toggle('open');
			});
			// Fermer le menu si on clique à l'extérieur
			document.addEventListener('click', function(e) {
				if (!menuSite.contains(e.target) && !menuIcon.contains(e.target)) {
					menuIcon.classList.remove('active');
					menuSite.classList.remove('open');
				}
			});
			// Fermer le menu quand on clique sur un lien du menu
			menuSite.querySelectorAll('a').forEach(function(link) {
				link.addEventListener('click', function() {
					menuIcon.classList.remove('active');
					menuSite.classList.remove('open');
				});
			});
		}

		// Toggle search box
		const searchIcon = document.querySelector('.seach_box .seach_icon');
		const searchBox = document.querySelector('.seach_box .seach_box_cover');
		const closeSearch = document.querySelector('.seach_box_cover .seach_icon');
		if (searchIcon && searchBox) {
			searchIcon.addEventListener('click', function() {
				searchBox.style.display = 'flex';
			});
		}
		if (closeSearch && searchBox) {
			closeSearch.addEventListener('click', function() {
				searchBox.style.display = 'none';
			});
		}

		// Toggle sous-menus sur mobile
		const menuItemsWithChildren = document.querySelectorAll('.menu_ortoc li.menu-item-has-children');
		menuItemsWithChildren.forEach(function(menuItem) {
			const link = menuItem.querySelector('a');
			const subMenu = menuItem.querySelector('.sub-menu');
			if (link && subMenu && window.innerWidth <= 992) {
				link.addEventListener('click', function(e) {
					e.preventDefault();
					menuItem.classList.toggle('open');
					subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
				});
			}
		});

		// === Code existant (jQuery) ===
		var header_nav = jQuery('#site_header .header_nav').outerHeight();
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 1) {
				jQuery('body').addClass('sticky');
				jQuery("#site_content").css({
					"padding-top": header_nav
				});
			} else {
				jQuery('body').removeClass('sticky');
				jQuery("#site_content").css({
					"padding-top": 0
				});
			}
			if (jQuery(this).scrollTop() > header_nav) {
				jQuery('body.home').addClass('stickyhome');
			} else {
				jQuery('body').removeClass('stickyhome');
			}
		});
		jQuery(window).resize(function() {
			var header_nav = jQuery('#site_header .header_nav').outerHeight();
			jQuery("#site_content").css({
				"padding-top": header_nav
			});
		});
		// ... (le reste du code jQuery existant)
		jQuery('.icon_search').click(function(e) {
			jQuery(this).next('#searchbox').slideToggle();
		});

		jQuery('.menuicon').click(function(e) {
			if (jQuery('.menuicon').hasClass('active')) {
				jQuery('.menuicon').removeClass('active');
			} else {
				jQuery('.menuicon').addClass('active');
			}
			jQuery(this).parents('.header_menu').find('.menudusite').toggleClass('open');
		});

		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.back-to-top').fadeIn(duration);
			} else {
				jQuery('.back-to-top').fadeOut(duration);
			}
		});

		jQuery('.back-to-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({
				scrollTop: 0
			}, duration);
			return false;
		});

		jQuery('.seach_icon').click(function(event) {
			jQuery(this).parents('.seach_box').find('.seach_box_cover').slideToggle();
		});

		$('.list_sites_naturels').slick({
			infinite: false,
			swipeToSlide: true,
			touchMove: true,
			dots: false,
			arrows: true,
			slidesToShow: 5,
			slidesToScroll: 1,
			prevArrow: $(".custom_slick_prev"),
			nextArrow: $(".custom_slick_next"),
			responsive: [{
					breakpoint: 991,
					settings: {
						slidesToShow: 4
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 2
					}
				}
			]
		});

		$('.slider_produits').slick({
			centerMode: true,
			infinite: true,
			centerPadding: '150px',
			swipeToSlide: true,
			touchMove: true,
			dots: true,
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [{
					breakpoint: 767,
					settings: {
						centerPadding: '70px',
						slidesToShow: 2
					}
				},
				{
					breakpoint: 575,
					settings: {
						centerPadding: '100px',
						slidesToShow: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});

		$('.testimonials_slider').slick({
			swipeToSlide: true,
			touchMove: true,
			dots: true,
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [{
					breakpoint: 767,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});

		$('.testimo_slider').slick({
			infinite: false,
			swipeToSlide: true,
			touchMove: true,
			dots: false,
			arrows: true,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		$('.slick_custom_dots').slick({
			dots: true,
			customPaging: function(slider, i) {
				return '<button class="tab">' + $(slider.$slides[i]).find(".tab_content_item").attr('data-nav-title') + '</button>';
			},
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true
		});
		const $datepicker = $('.datepicker');
		if (!$datepicker.data('datepicker')) {
			$(".datepicker").datepicker({
				autoclose: false,
				todayHighlight: true
			}).on('change', function() {
				$('.datepicker_field .datepicker').hide();
			}).datepicker('update', new Date());
		}



		// bind filter button click
		$(".posts_filters").on("click", "button", function() {
			var filterValue = $(this).attr("data-filter");
			$('.postitem').hide();
			$('.postitem' + filterValue).show();
			//$grid.isotope({ filter: filterValue });
		});

		// change _is-checked class on buttons
		$(".posts_filters").each(function(i, buttonGroup) {
			var $buttonGroup = $(buttonGroup);
			$buttonGroup.on("click", "button", function() {
				$buttonGroup.find(".checked").removeClass("checked");
				$(this).addClass("checked");
			});
		});

		$("input[type=file]").change(function(e) {
			$(this).parents(".custom_uploadfile").find(".custom_file_label").text(e.target.files[0].name);
		});


		$('.qty_button').off('click').on('click', function() {
			if ($(this).hasClass('qty_plus')) {
				var addValue = parseInt($(this).parent().find('input').val()) + 1;
				$(this).parent().find('input').val(addValue).trigger('change');
			}
			if ($(this).hasClass('qty_minus')) {
				var removeValue = parseInt($(this).parent().find('input').val()) - 1;
				if (removeValue == 0) {
					removeValue = 1;
				}
				$(this).parent().find('input').val(removeValue).trigger('change');
			}
		});
		$('.custom_qtyfield input').off('change').on('change', function() {
			console.log($(this).val());
		});



		$(".menu_ortoc li").hover(function() {
			var isHovered = $(this).is(":hover");
			if (isHovered) {
				$(this).children(".sub-menu").stop().slideDown(300);
			} else {
				$(this).children(".sub-menu").stop().slideUp(300);
			}
		});

		$('[data-fancybox="images"]').fancybox({
			buttons: [
				'slideShow',
				'zoom',
				'fullScreen',
				'close'
			]
		});

		$(window).on('load', function() {
			function gridMasonry() {
				var grid = $(".galerie_list")
				if (grid.length) {

					grid.isotope({
						itemSelector: '.gal_item',
						percentPosition: true,
						layoutMode: 'masonry',
						masonry: {
							columnWidth: '.grid-sizer',
						},
					});

				}
			}
			gridMasonry();
		});

		// Integrated scroll behavior for the navbar
		var header = document.querySelector('.header_menu');
		if (window.scrollY > 50) { // Adjusted scroll threshold
			header.style.position = 'fixed';
			header.style.top = '0';
		} else {
			header.style.position = 'absolute';
			header.style.top = '20px';
		}
	});
</script>

<script>
window.addEventListener('scroll', function() {
    var header = document.querySelector('.header_menu');
    if (window.scrollY > 50) { // Adjusted scroll threshold
        header.style.position = 'fixed';
        header.style.top = '0';
    } else {
        header.style.position = 'absolute';
        header.style.top = '20px';
    }
});
</script>

<?php wp_footer(); ?>

</body>

</html>