<?php
/*
Template Name: Biography
*/
?>
     

<?php get_header();  

$page_title = $wp_query->post->post_title;
$the_content = $wp_query->post->post_content;
$page_slug = basename(get_permalink()); //$page_slug will match category slug for use in loop
$sub_slug = $page_slug . '-landscape';

?>
			
 <div class="large-12 columns" id="content">
         
     <?php get_template_part( 'partials/nav', 'side' ); ?>
         
<div class="large-9 medium-8 small-12 columns" >
 

  <h3 class="gallery-title"><?php echo $page_title;?></h3>
  
    <div class="large-12 columns biography-text"> 
    
    <div class="large-2 medium-4 small-12 columns"><?php echo get_wp_user_avatar( '1', '200' ); ?> </div>
    <div class="large-10 medium-8 small-12 columns" >
    <?php the_author_meta( 'description', 1 ); ?>
   
        </div>
    </div>
    
     
     
    <div class="bio">
    
    
    <?php echo $the_content;?>

    </div>
  
    
   
 
    
  

</div>
           
               </div>    
                <?php get_footer(); ?>                         
                                           