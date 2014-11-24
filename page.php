<?php
/*
Template Name: Gallery Pages
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
     <div class="columns" >
  <h3 class="" id="gallery-title"><?php echo $page_title . " - Abstracts <br><span>";?></span></h3>
     <div class="gallery">
<?php

  $args = array(
      'post_type' => 'paintings',
      'category_name'  => $page_slug
    );

  $the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php get_template_part( 'partials/loop', 'paintings' ); ?>

<?php endwhile; endif; ?>

        </div>
   </div>
    
    
     <div class="columns" >
  <h3 class="" id="gallery-title"><?php echo $page_title . " - Landscapes <br>" ;?></h3>

         <?php

  $args = array(
      'post_type' => 'paintings',
      'category_name'  => $sub_slug
    );

  $the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php get_template_part( 'partials/loop', 'paintings' ); ?>

<?php endwhile; endif; ?>

         </div>
 
    
  

</div>
           
               </div>    
                <?php get_footer(); ?>                         
                                           