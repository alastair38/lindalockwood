<div class="large-12 columns show-for-medium-up">
	<div class="fixed">

		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->

		<nav class="top-bar" data-topbar>
		

	
			<section class="top-bar-section">

<ul class="social-menu">
<li><a href="mailto:<?php the_author_meta( 'user_email', 1 ); ?>" target="_blank"><i class="fi-mail" title="Email"></i></a></li>
<li><a href="<?php the_author_meta( 'twitter_profile', 1 ); ?>" target="_blank"><i class="fi-social-twitter" title="Follow Me On Twitter"></i></a></li> 
<li><a href="<?php the_author_meta( 'vimeo_profile', 1 ); ?>" target="_blank"><i class="fi-social-vimeo" title="Follow Me On Vimeo"></i></a></li>  
<li><a href="#" data-reveal-id="myModal"><i class="fi-torso-female" title="More about Charina"></i></a></li>
</ul>

    <h1 class="namen"> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>


<div id="myModal" class="reveal-modal full" data-reveal>
  <h2>Biography</h2>
  <p class="">
  <?php the_author_meta( 'description', 1 ); ?> 
  </p>
  <a class="close-reveal-modal">&#215;</a>
  </div>

           </section>
       
    </div>

			
		</nav>
	</div>
</div>

<div class="large-12 columns show-for-small-only">
	<div class="contain-to-grid fixed">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
			
		</nav>
	</div>
</div>

<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label>Bio</label></li>
		<li id="off-canvas-bio"><?php the_author_meta( 'description', 1 ); ?></li>
		<li><a href="mailto:<?php the_author_meta( 'user_email', 1 ); ?>" target="_blank"><i class="fi-mail" title="Email"></i></a></li>
<li><a href="<?php the_author_meta( 'twitter_profile', 1 ); ?>" target="_blank"><i class="fi-social-twitter" title="Follow Me On Twitter"></i></a></li> 
<li><a href="<?php the_author_meta( 'vimeo_profile', 1 ); ?>" target="_blank"><i class="fi-social-vimeo" title="Follow Me On Vimeo"></i></a></li>	
               
	</ul>
</aside>


<a class="exit-off-canvas"></a>