<div class="large-12 columns show-for-small-only ">
	<div class="contain-to-grid fixed">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
					<h1 class="title"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon"  href="#"><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label>Work</label></li>
                <li><a href="<?php echo home_url(); ?>" rel="nofollow">Home</a></li>
		<?php joints_main_nav(); ?> 
		<li><label>Contact</label></li>
		<li><a href="mailto:<?php the_author_meta( 'user_email', 1 ); ?>" target="_blank">Email</a></li>
		<li><a href="tel:07968853118">T: <?php the_author_meta( 'phone_number', 1 ); ?></a></li>
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>