<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

</div><!-- #wrapper -->
<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	//get_sidebar( 'footer' );
	 function cutWord($str,$length)
	{
		if($str[0]=='"')
		{
			$str = substr($str,1,strlen($str));
		}
		
		if(strlen($str) <= $length){
			return $str;
		}else{
			$pos = strrpos(substr($str, 0, $length) , ' ', -1);
			return substr($str, 0, $pos) . " ...";
		}
	}
?>


		<div id="about_us">
			<img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/display.png'; ?>"/>
			<h2>ABOUT US</h2>
			<div id="aboutus_content">
			June Media is a leading content provider for women as well an affiliate network that enables its advertising clients to generate 
			high volumes of top-quality customer leads and sales on a pay-for-performance basis. June Media is a  privately held 
			company with offices in both New York and Chicago.<br/><br/>
			276 5th Ave Suite #901<br>
			New York, NY 10001<br>
			Telephone: 212-630-0234<br/>
			Fax: 212-630-0210<br/><br/>

      200 E. Ohio Street, Suite 300<br/>
      Chicago, Illinois 60611<br/><br/>
			</div>
		</div>
		<div id="latest_news">
			<img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/comment 2.png'; ?>"/>
			<h2>LATEST NEWS</h2>
			<div id="latestnews_content">
				<div class="submain_content">
				 <ul>
					<?php
					global $post;
					$args = array( 'numberposts' => 4, 'offset'=> 0, 'category' => 5 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); $month = date('M',strtotime($post->post_date));$day = get_the_time('d',strtotime($post->post_date));?>
						<li>
						<div class="publish_date"><?php echo $day.'<br/>'.$month;?></div>						
						<div class="smalldesc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></div>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>			
			</div>
		</div>
		<div id="contact_us">
			<img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/email 1.png'; ?>"/>
			<h2>CONTACT US</h2>
			<div id="contact_form">
			<?php echo do_shortcode( '[contact-form 3 "Home Page Bottom"]' ); ?>
			</div>
		</div>

		</div><!-- #colophon -->
		<div id="footer_menu">
			<div id="f_links">
				<a href="/index.php">Home</a>
				<a href="/about-us/">About Us</a>
				<a href="http://www.juneexchange.com/" target=_blank>June Exchange</a>
				<a href="/contact-us/">Contact Us</a>
			</div>
			<div id="social_icon">
				<a href="https://www.facebook.com/pages/June-Media/127408684122182" target="_blank"><img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/facebook.png'?>" /></a>
				<a href="https://twitter.com/june_media" target="_blank"><img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/twitter.png'?>" /></a>
				<a href="http://pinterest.com/junemedia/" target="_blank"><img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/pinterest.png'?>" /></a>
				<a href="https://plus.google.com/b/101723837085221819448/101723837085221819448/posts" target="_blank"><img src="<?php echo home_url( '/' ).'wp-content/themes/'.get_template().'/images/googleplus.png'?>" style= "margin-right:5px;" /></a>
			</div>
			<p style="text-align:center;">&copy; <?php echo date('Y'); ?> <a href="http://www.junemedia.com/">June Media Inc</a> All rights reserved</p>
		</div>
	</div><!-- #footer -->


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<!-- LiveRamp --><iframe name="_rlcdn" width=0 height=0 frameborder=0 src="http://rc.rlcdn.com/366718.html"></iframe><!-- LiveRamp -->
</body>
</html>
