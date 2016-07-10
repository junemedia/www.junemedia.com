<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="icon" type="image/png" href="/favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/lightbox.css" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script language="javascript" type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/jquery.touchSwipe.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/script.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/jquery.smooth-scroll.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/lightbox.js"></script>
<?php 
//Check if it is the "Contact Us" page. If so, include the old jquery version for contact form file upload.
if(is_page(47)){?>
	<script src="<?php echo get_bloginfo('url');?>/wp-includes/js/jquery/jquery.js?ver=1.4.4" type="text/javascript"></script>
<?php }?>
<script type="text/javascript">
 $(document).ready( function(){	
 
 $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      });
		// buttons for next and previous item						 
		var buttons = { previous:$('#jslidernews1 .button-previous') ,
						next:$('#jslidernews1 .button-next') };								
		 $('#jslidernews1').lofJSidernews( { interval : 4000,
											direction		: 'opacitys',	
											easing			: 'easeInOutExpo',
											duration		: 800,
											auto		 	: true,
											maxItemDisplay  : 4,
											mobile   : true,
											navPosition     : 'vertical', // horizontal
											navigatorHeight : 16,
											navigatorWidth  : 16,
											mainWidth		: 960,
											buttons			: buttons } );	
											
		var pj_buttons = { previous:$('#slidecontent .button-previous') ,
						next:$('#slidecontent .button-next') };								
		 $('#slideproject').lofJSidernews( { interval : 4000,
											direction		: 'opacitys',	
											easing			: 'easeInOutExpo',
											duration		: 800,
											auto		 	: false,
											maxItemDisplay  : 4,
											mobile   : true,
											navPosition     : 'vertical', // horizontal
											navigatorHeight : 16,
											navigatorWidth  : 16,
											mainWidth		: 960,
											buttons			: pj_buttons} );
											
		var tm_buttons = { previous:$('.slideteam .button-previous') ,
						next:$('.slideteam .button-next') };								
		 $('#slideteam').lofJSidernews( { interval : 4000,
											direction		: 'opacitys',	
											easing			: 'easeInOutExpo',
											duration		: 800,
											auto		 	: false,
											maxItemDisplay  : 4,
											mobile   : true,
											navPosition     : 'vertical', // horizontal
											navigatorHeight : 16,
											navigatorWidth  : 16,
											mainWidth		: 960,
											buttons			: tm_buttons} );											
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41745885-1', 'junemedia.com');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="access" role="navigation">
			  	<div id="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/logo.png'?>"/></a></div>
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<!--<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>-->
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
			<!--<div id="branding" role="banner">
				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : ?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; ?>
			</div>--><!-- #branding -->

		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
