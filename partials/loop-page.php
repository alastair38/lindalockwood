
                    
<?php 

$excerpt = strip_tags(get_the_excerpt());
$price = get_field('price');

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

?>
						
	<li data-background="<?php echo $url;?>" >
        <div data-alert class="alert-box" data-photo="<?php echo $excerpt;?>">
        
        <div class="flick-sub-text">
        <h4><?php echo the_title();?></h4>
        <?php echo $excerpt;?>
        <?php the_post_thumbnail('full');?>
        
        <div class="price"><?php echo "£" . $price ;?></div>
        <a href="#" class="close" title="Close Description">&times;</a>
        <ul class="share">
        <li>
        <a href="https://pinterest.com/pin/create/button/?url=Linda%20Lockwood&media=<?php $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'large', true);
echo $image_url[0];  ?>&description=<?php echo $excerpt;?>" target="_blank"><i class="fi-social-pinterest"></i></a>
       </li>
       <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $image_url[0];  ?>" target="_blank"><i class="fi-social-facebook"></i></a> 
       </li>
       <li><a href="https://twitter.com/home?status=@charina_beswick%20<?php echo $excerpt;?>" target="_blank"><i class="fi-social-twitter"></i></a>
       </li>
       </ul>
        
        
        </div>
        
        </div>
        
    </li>
    
