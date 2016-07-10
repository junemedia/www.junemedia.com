<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<div id="team-sidebar">
	<ul>
	<?php if(!is_single(195)) {?>
		<li>
			<a href="<?php echo get_permalink(195);?>"><img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2013/06/JimSanger_headshot-150x150.jpg" class="side_teamimage"/></a>
			<div class="side_teamdetail">
				<a href="<?php echo get_permalink(195);?>">
					<h4>Jim Sanger</h4>
					<h5>Chief Executive Officer</h5>
				</a>
			</div>
		</li>
	<?php }?>
	<?php if(!is_single(201)) {?>
		<li>
			<a href="<?php echo get_permalink(201);?>"><img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2013/06/Trish_headshot-150x150.jpg" class="side_teamimage"/></a>
			<div class="side_teamdetail">
				<a href="<?php echo get_permalink(201);?>">
					<h4>Trish Donoghue</h4>
					<h5>CFO and VP - Operations</h5>
				</a>
			</div>
		</li>
	<?php }?>
	<?php if(!is_single(207)) {?>
		<li>
			<a href="<?php echo get_permalink(207);?>"><img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2013/06/Will_headshot-150x150.jpg" class="side_teamimage"/></a>
			<div class="side_teamdetail">
				<a href="<?php echo get_permalink(207);?>">
					<h4>William Grant</h4>
					<h5>CTO and VP - Product</h5>
				</a>
			</div>
		</li>
	<?php }?>
	<?php /*if(!is_single(211)) {?>
		<li>
			<a href="<?php echo get_permalink(211);?>"><img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2013/06/SusanLeiterstein_headshot-150x150.jpg" class="side_teamimage"/></a>
			<div class="side_teamdetail">
				<a href="<?php echo get_permalink(211);?>">
					<h4>Susan Leiterstein</h4>
					<h5>Vice President Sales</h5>
				</a>
			</div>
		</li>
	<?php }*/?>
	<?php /*if(!is_single(215)) {?>
		<li>
			<a href="<?php echo get_permalink(215);?>"><img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2013/06/steve-150.jpg" class="side_teamimage"/></a>
			<div class="side_teamdetail">
				<a href="<?php echo get_permalink(215);?>">
					<h4>Steve Filipiak</h4>
					<h5>Vice President Marketing</h5>
				</a>
			</div>
		</li>
	<?php }*/?>
	<?php /*if(!is_single(221)) {?>
		<li>
			<a href="<?php echo get_permalink(221);?>"><img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2013/06/hillary-150.jpg" class="side_teamimage"/></a>
			<div class="side_teamdetail">
				<a href="<?php echo get_permalink(221);?>">
					<h4>Hillary Marshak</h4>
					<h5>Director of Content Development</h5>
				</a>
			</div>
		</li>
	<?php }*/?>
	</ul>
</div>
