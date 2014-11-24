                    
<?php 

$excerpt = strip_tags(get_the_excerpt());
$title = strip_tags(get_the_title());
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
global $wp;
$current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );

?>
						
<div class="large-4 medium-6 small-12 columns end"><a href="<?php echo $url;?>" data-caption="<?php echo the_title() . ', ';?>
<?php
$posttags = get_the_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo $tag->name;
}
}
?>
<a href='https://pinterest.com/pin/create/button/?url=Linda%20Lockwood&media=<?php $image_id = get_post_thumbnail_id();$image_url = wp_get_attachment_image_src($image_id,'large', true);echo $image_url[0];  ?>&description=<?php echo $title;?>' target='_blank' title='Pin it!'><i class='fi-social-pinterest'></i></a> <a class='email_link' target='_blank' title='Contact Linda about <?php echo the_title();?>' href='mailto:<?php the_author_meta( 'user_email', 1 ); ?>?subject=<?php echo the_title();?>%20-%20Linda-Lockwood.com&body=Linda%2C%20I%27m%20contacting%20you%20to%20inquire%20about%20%22<?php echo the_title();?>%22%2C%20which%20I%20saw%20on%20your%20website.''><i class='fi-mail'></i></a>"><img src="<?php echo $url;?>" title="<?php echo the_title();?>" alt="<?php echo the_title();?>"></a>
    <div class="share has-tip tip-top" data-tooltip aria-haspopup="true" data-width="280" title="<?php echo the_title() . '<br> Click on the image for more info and to contact Linda about this work';?>"><i class='fi-info'></i><?php echo the_title();?></div></div>

