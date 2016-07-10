<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-team.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'team' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<div id="teambanner">
	<img src="<?php echo get_bloginfo( 'template_directory' );?>/images/team_banner.jpg" />
</div>

<div id="team_middlecontent">
	<img src="<?php echo get_bloginfo( 'template_directory' );?>/images/team_reserve.jpg" />
	<div class="team_intro">
		<h1>KNOW OUR TEAM</h1>
		<p>With more than 100 years of collective experience in management and digital operations, 
		our management team is focused on driving June Media's vision out in each and every product. </p>
	</div>
</div>
<div style="clear:both;"></div>
<div id="slidecontent" class="slideteam">
<script>
//var $j = jQuery.noConflict();

// Fade load image
$(function() {
    $(".fadeload").css("opacity", "0");
    $(window).load(function() {
        $(".fadeload").animate({
            opacity: 1
        }, {
            duration: 800,
            easing: 'easeInSine'
        });
    });
});


// Fade hover
$(function() {
    $(".fadeover").hover(function() {
        $(this).animate({
            opacity: 0.2
        });
    }, function() {
        $(this).stop(true, true).animate({
            opacity: 1
        });
    });
});

// Fade hover image link Video, Image or Document... ?
$(function() {
    // Others
    $(".hover a").addClass("link_blog");
    // Image
    $(".hover a[href$='.png'], .hover a[href$='.jpg'], .hover a[href$='.jpeg']").removeClass("link_blog").addClass("link_img");
    // Video
    $(".hover a[href$='.swf'], .hover a[href$='.mov'], .hover a[href$='.rft']").removeClass("link_blog").addClass("link_vid");
    // Docs
    $(".hover a[href$='.pdf']").removeClass("link_blog").addClass("link_doc");


});
</script>
	<div class="top_c">
		<h2>MEET THE TEAM</h2>
		<div class="sp_line" style="width:75%;">
			<div style="height:10px;border-top:1px solid #EBEBEB;border-bottom:1px solid #EBEBEB;"></div>
		</div>
		<!--<div class="arrow_p">
			<div class="button-next">Next</div>
			<img src="<?php echo get_bloginfo( 'template_directory' );?>/images/arrow_left.png" />
			<img src="<?php echo get_bloginfo( 'template_directory' );?>/images/arrow_right.png" />
			<div  class="button-previous">Previous</div>
		</div>-->
	</div>
	<div class="bottom_c">
		<div id="slideteam" class="tm-slidecontent" style="width:960px; height:300px;">
			<div class="preload"><div></div></div>
				<div class="main-slider-content" style="width:960px; height:300px;">
					<ul class="sliders-wrap-inner">
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
					  </ul>  	
				</div>			
		 </div>
	</div>
</div>
